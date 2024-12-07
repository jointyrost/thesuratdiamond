<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDiamondRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [

            'stoneType' => 'required|string',
            'name' => 'required|string|max:255',
            'product_id' => 'required|string|max:255',
            'shape' => 'required|string',
            'color_category' => 'required|string',
            'd_to_z_selection' => 'nullable|string',
            'general_options' => 'nullable|string',
            'fancy_color' => 'nullable|string',
            'fancy_intensity' => 'nullable|string',
            'treated_color' => 'nullable|string',
            'price_per_carat' => 'required|numeric',
            'stone_user_price' => 'required|numeric',
            'stone_wholesaler_price' => 'required|numeric',
            'stone_image' => 'nullable|image|max:2048' // Adjust as necessary


        ];

        // Rules for Natural Diamond
        if ($this->stoneType === 'natural-diamond') {

            switch ($this->diamond_category) {
                case 'parcel':
                    $rules = array_merge($rules, [

                        'size_type' => 'nullable|string',
                        'generalSize' => 'nullable|string', // For general sizes
                        'sieveSize' => 'nullable|string',  // For sieve sizes

                    ]);
                    break;

                case 'single_non_certified':

                    $rules = array_merge($rules, [

                        'bgm' => 'required|string',

                    ]);
                    break;

                case 'single_certified':
                    $rules = array_merge($rules, [
                        'bgm' => 'required|string',

                        'lab' => 'required|string'
                    ]);
                    break;
            }

            // Additional general rules for natural diamonds (if needed)
            $rules = array_merge($rules, [
                'stone_clarity' => 'required|string|max:255',
                'stone_carat' => 'required|numeric',
                'natts' => 'required|string|max:3',
                'cut' => 'required|string|max:255',
                'fluorescence' => 'required|string|max:255',
                'length' => 'nullable|numeric',
                'width' => 'nullable|numeric',
                'depth' => 'nullable|numeric',
                'terms' => 'nullable|string',
                'remarks' => 'nullable|string',
            ]);
        }

        if ($this->stoneType === 'lab-grown-diamond') {

            switch ($this->diamond_category) {
                case 'parcel':
                    $rules = array_merge($rules, [

                        'size_type' => 'nullable|string',
                        'generalSize' => 'nullable|string', // For general sizes
                        'sieveSize' => 'nullable|string',  // For sieve sizes

                        'process' => 'required|string|max:255',

                    ]);
                    break;

                case 'single_non_certified':

                    $rules = array_merge($rules, [

                        'bgm' => 'required|string',

                        'process' => 'required|string|max:255',

                    ]);
                    break;

                case 'single_certified':
                    $rules = array_merge($rules, [
                        'bgm' => 'required|string',

                        'lab' => 'required|string',

                        'process' => 'required|string|max:255',
                    ]);
                    break;
            }

            // Additional general rules for natural diamonds (if needed)
            $rules = array_merge($rules, [
                'stone_clarity' => 'required|string|max:255',
                'stone_carat' => 'required|numeric',
                'natts' => 'required|string|max:3',
                'cut' => 'required|string|max:255',
                'fluorescence' => 'required|string|max:255',
                'length' => 'nullable|numeric',
                'width' => 'nullable|numeric',
                'depth' => 'nullable|numeric',
                'terms' => 'nullable|string',
                'remarks' => 'nullable|string',
            ]);
        }





        // Additional rules for colored lab-grown diamonds
        if ($this->stoneType === 'coloured-lab-grown-diamond') {
            $rules = array_merge($rules, [
                'stone_clarity' => 'required|string|max:255',
            ]);
        }

        // Rules for Moissanite
        if ($this->stoneType === 'moissanite') {
            $rules = array_merge($rules, []);
        }

        // Rules for Sapphire
        if ($this->stoneType === 'sapphire') {
            $rules = array_merge($rules, []);
        }

        return $rules;
    }
}
