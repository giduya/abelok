<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;


class UsersExport implements FromArray, WithHeadings
{

    public function array(): array
    {
        $users = User::whereNotNull('username')
        ->with('declarations', 'declarations.employment')
        ->get()
        // ->whereHas('declarations', function ($query) {
        //         $query->whereNotNull('declarations.sign_date');
        // })

        ;

        $formatted_users = [];
        $baseUrl = $_SERVER['HTTP_HOST'];
        foreach ($users as $user) {

            $declaration_date = '';
            $official_level = '';
            $employment_description = '';
            $ascription_area = '';
            $declaration_type = '';
            $url_public = '';
            $sign_date = '';


            if (sizeof($user->declarations) > 0) {
                $current_declaration = $user->declarations[0];

                $declaration_date = $current_declaration->created_at;
                $declaration_type = $current_declaration->type;

                if ($current_declaration->employment) {
                    $official_level = $current_declaration->employment->employment_level;
                    $employment_description = $current_declaration->employment->employment;
                    $ascription_area = $current_declaration->employment->ascription_area;

                }

                if ($current_declaration->sign_date) {
                    $sign_date = $current_declaration->sign_date;
                    $url_public = $baseUrl . "/declaracion-public?token=".uniqid()."&origin=".$user->id."-".$current_declaration->id;

                    $data = [
                        $official_level,
                        $employment_description,
                        $employment_description,
                        $ascription_area,
                        $user->name,
                        $user->firstname,
                        $user->lastname,
                        $declaration_type,
                        $url_public,
                        $sign_date
                    ];

                    array_push($formatted_users, $data);
                }


            }

            
        }

        return $formatted_users;
    }

    public function headings(): array
    {
        return [
            'Clave o nivel del puesto',
            'Denominación del puesto',
            'Denominación del cargo',
            'Área de adscripción',
            'Nombre(s)',
            'Primer apellido',
            'Segundo apellido',
            'Modalidad de la Declaración Patrimonial',
            'Hipervínculo Declaración de Situación Patrimonial',
            'Fecha de validación',
        ];
    }
}
