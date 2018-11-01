<?php
  use Faker\Generator as Faker;

  $faker = new Faker;
  $faker::create()->image('public/images/upload', 640, 480, null, false);
