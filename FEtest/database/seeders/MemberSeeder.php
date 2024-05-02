<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Member::truncate();

        $member_data = [];
        for ($i = 1; $i <= 10; $i++) {
            $member_data[] = [
                'email' => sprintf('member%02d@exmaple.com', $i),
                'password' => sprintf('pass%04d', $i),
                'name' => sprintf('テストbot%02d', $i),
            ];
        }

        foreach ($member_data as $data) {
            $member = new Member();
            $member->email = $data['email'];
            $member->password = Hash::make($data['password']);
            $member->name = $data['name'];
            $member->save();
        }
    }
}
