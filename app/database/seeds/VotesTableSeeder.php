<?php

class VotesTableSeeder extends Seeder {

  public function run()
  {
    DB::table('votes')->truncate();

    foreach(range(1,30) as $index) {
      $candidate = Candidate::orderBy(DB::raw('RAND()'))->first();
      $user = User::orderBy(DB::raw('RAND()'))->first();

      $user->votes()->attach($candidate->id);
    }


  }
}