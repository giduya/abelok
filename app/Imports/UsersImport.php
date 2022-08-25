<?php

namespace App\Imports;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpParser\Node\Stmt\Return_;

class UsersImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {
        // $users = [];

        // foreach ($rows as $row) {
        //     $user = new User([
        //         'username'     => $row['RFC'],
        //         'homoclave'    => $row['HOMOCLAVE'],
        //         'name'    => $row['NOMBRES'],
        //         'firstname'    => $row['APELLIDO PATERNO'],
        //         'lastname'    => $row['APELLIDO MATERNO'],
        //         'type'    => 'user',
        //         'password' => Hash::make('declarapat'),
        //     ]);
        //     array_push($users, $user);
        // }
        
        // return $users;
    }
}

// use Maatwebsite\Excel\Concerns\ToModel;

// class UsersImport implements ToModel
// {
//     /**
//      * @param array $row
//      *
//      * @return User|null
//      */
//     public function model(array $row)
//     {
//         return new User([
//            'username'     => $row[0],
//            'homoclave'    => $row[1], 
//            'name'    => $row[2], 
//            'firstname'    => $row[3], 
//            'lastname'    => $row[4], 
//            'type'    => 'user', 
//            'password' => Hash::make('declarapat'),
//         ]);
//     }
// }


// namespace App\Imports;

// use App\User;
// use Illuminate\Support\Collection;
// use Illuminate\Support\Facades\Validator;
// use Maatwebsite\Excel\Concerns\ToCollection;
// use Illuminate\Support\Facades\Hash;

// class UsersImport implements ToCollection
// {
//     public function collection(Collection $rows)
//     {
//          Validator::make($rows->toArray(), [
//              '*.0' => 'required',
//              '*.1' => 'required',
//              '*.2' => 'required',
//              '*.3' => 'required',
//              '*.4' => 'required',
//          ])->validate();

//         foreach ($rows as $row) {
//             User::create([
//                 'username'     => $row[0],
//                 'homoclave'    => $row[1], 
//                 'name'    => $row[2], 
//                 'firstname'    => $row[3], 
//                 'lastname'    => $row[4], 
//                 'type'    => 'user', 
//                 'password' => Hash::make('declarapat')
//                 ]);
//         }
//     }
// }
