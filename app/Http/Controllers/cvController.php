<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CVController extends Controller
{
    public function index()
    {
        // Data CV statis (bisa juga dari file JSON)
        $data = [
            'name' => 'Alif Andika Amin',
            'title' => 'Computer Engineer',
            'summary' => 'Lulusan Telkom University, berpengalaman dalam Arduino dan otomasi.',
            'skills' => ['Arduino', 'Laravel', 'PLC', 'C++', 'Vue.js'],
            'education' => [
                ['school' => 'Telkom University', 'year' => '2020 - 2024', 'major' => 'Computer Engineering'],
                ['school' => 'MAN Surabaya', 'year' => '2017 - 2020']
            ],
            'experience' => [
                ['position' => 'Intern', 'company' => 'PT. Insan Sejahtera Engineering', 'year' => '2023']
            ],
            'certifications' => [
                'Sertifikasi PLC (BNSP)', 'EPRT Score: 523'
            ],
            'contact' => [
                'email' => 'emailmu@example.com',
                'linkedin' => 'https://linkedin.com/in/username',
                'github' => 'https://github.com/username'
            ]
        ];

        return view('cv', compact('data'));
    }
}
