<?php

use app\model\entities\Gallery;


class GalleryTest extends \PHPUnit\Framework\TestCase
{
    public function testGallery()
    {
        $gallery = new Gallery("img", "image1", "Ursula Le Guin", "The Wizard of Earthsea", 1200);
        $this->assertEquals("img", $gallery->address);
        $this->assertEquals("image1", $gallery->name);
		$this->assertEquals("Ursula Le Guin", $gallery->author);
		$this->assertEquals("The Wizard of Earthsea", $gallery->name_book);
		$this->assertEquals(1200, $gallery->price);
        /*
        if (strpos(Models::class, "App\\") === 0)
            if (array_slice(explode("\\", get_class(new Models)), 1, 1) === ["Model"])
                if (substr_count(Models::class, "\\") === 2)
        */
    }

}