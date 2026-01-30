<?php
/*
 * This file is part of KrivArt QrCode.
 *
 * (c) Noah Too aka Krivah <krivahtoo@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace KrivArt\QrCode\Output;

/**
 * Gif image class
 */
class Gif extends Image
{
    /**
     * {@inheritdoc}
     */
    public function output($target = null)
    {
        $this->target = $target;
        if ($target) {
            \imagegif($this->data, $target);
        } else {
            \imagegif($this->data);
        }
        \imagedestroy($this->data);
    }
}
