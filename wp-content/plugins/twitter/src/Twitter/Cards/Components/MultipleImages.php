<?php
/*
The MIT License (MIT)

Copyright (c) 2015 Twitter Inc.

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/

namespace Twitter\Cards\Components;

/**
 * A card with multiple images
 *
 * @since 1.0.0
 */
trait MultipleImages
{

    /**
     * Images representing the content of the page
     *
     * @since 1.0.0
     *
     * @type array {
     *   Images stored for the card
     *
     *   @type string image uri
     *   @type \Twitter\Cards\Components\Image card image
     * }
     */
    protected $images = array();

    /**
     * Keep track of the total number of images stored for the card
     *
     * @since 1.0.0
     *
     * @type int
     */
    protected $image_count = 0;

    /**
     * Get the images array
     *
     * @since 1.0.0
     *
     * @return array {
     *   Images stored for the card
     *
     *   @type string image uri
     *   @type \Twitter\Cards\Components\Image card image
     * }
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Add an image representing the content of the page
     *
     * @since 1.0.0
     *
     * @param string|\Twitter\Cards\Components\Image $url absolute URL of an image file
     * @param int $width width of the image in whole pixels
     * @param int $height height of the image in whole pixels
     *
     * @return __CLASS__ support chaining
     */
    public function addImage($url, $width = 0, $height = 0)
    {
        // URL required
        if (! $url) {
            return $this;
        }
        if (! ( is_int($width) && $width >= 0 )) {
            $width = 0;
        }
        if (! ( is_int($height) && $height >= 0 )) {
            $height = 0;
        }

        // have we already filled the image allotment?
        if (defined(__CLASS__ . '::MAX_IMAGES') && $this->image_count === self::MAX_IMAGES) {
            return $this;
        }

        $image = null;
        $preset = false;
        if (is_a($url, '\Twitter\Cards\Components\Image')) {
            // support overloading the function
            $image = $url;
            $url = $url->getURL();
            if (isset( $this->images[ $url ] )) {
                return $this;
            }
            $preset = true;
            $width = $image->getWidth();
            $height = $image->getHeight();
        } elseif (is_string($url)) {
            if (isset( $this->images[ $url ] )) {
                return $this;
            }
            try {
                $image = new \Twitter\Cards\Components\Image($url);
            } catch (Exception $e) {
                return $this;
            }
        }

        if (! $image) {
            return $this;
        }

        // only set dimensions if both width and height exist
        if (is_int($width) && $width && is_int($height) && $height) {
            // test if minimum width and height requirements are met for the card type
            if (defined(__CLASS__ . '::MIN_IMAGE_WIDTH') && defined(__CLASS__ . '::MIN_IMAGE_HEIGHT')) {
                if ($width >= self::MIN_IMAGE_WIDTH && $height >= self::MIN_IMAGE_HEIGHT) {
                    if (! $preset) {
                        $image->setWidth($width);
                        $image->setHeight($height);
                    }
                } else {
                    // do not store image if minimum requirements not met
                    return $this;
                }
            } else {
                if (! $preset) {
                    $image->setWidth($width);
                    $image->setHeight($height);
                }
            }
        }

        $this->images[ $url ] = $image;
        $this->image_count = count($this->images);

        return $this;
    }
}
