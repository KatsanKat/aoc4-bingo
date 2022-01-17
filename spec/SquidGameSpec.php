<?php

use App\Grilles;
use App\Tirage;

describe('SquidGame', function () {

    given('file', function() {
        return file('input.txt');
    });

    describe('#squid game', function () {

        context ('read file', function () {

            it ('check size of numberBag', function () {
                $tirage = new Tirage($this->file);

                expect($tirage->size)->toEqual(100);
            });

            it('check first number', function () {
                $tirage = new Tirage($this->file);

                expect($tirage->numberBag[0])->toEqual(87);
            });

            it('identify how many grids there are', function () {
                $grilles = new Grilles($this->file);

                expect($grilles->grillesCount)->toBe(100);
            });

        });

    });

});
