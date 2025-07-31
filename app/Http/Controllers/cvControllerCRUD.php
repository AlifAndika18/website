<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cvControllerCRUD extends Controller
{
    /**
     * Display a listing of the resource.
     */
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

        return view('cvd', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
