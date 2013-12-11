<?php

class PhotoGallery extends Eloquent {

    public $table = 'photo_galleries';

    public function photos() {

        return $this->hasMany('Photo', 'relationship_id');
    }
}
