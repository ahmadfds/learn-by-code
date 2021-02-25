<?php

/**
 * This is from the Views module for Drupal 7. The views_handler_area_text_custom inherits from four parents,
 * and at this stage down the inheritance chain, this class has to override the parent class just to make it work.
 * This is a simple example on how overuse of inheritance can cause problems and messy code at the end.
 * The five SOLID principles help write better OOP code, and the Liskov Substitution Principle is an important one
 */

class views_object {}
class views_handler extends views_object {}
class views_handler_area extends views_handler {}
class views_handler_area_text extends views_handler_area{}

class views_handler_area_text_custom extends views_handler_area_text {
    // ...

    public function options_submit(&$form, &$form_state) {
        // Empty, so we don't inherit options_submit from the parent.
    }
}