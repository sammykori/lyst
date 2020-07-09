<?php

namespace App\Exports;

use App\Dealers;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;

class VirtualExport implements FromQuery, WithHeadings
{

    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return Dealers::select('id','licence_id', 'company_name', 'class', 'phone_1', 'phone_2', 'email', 'address', 'digi_addr','po_box', 'effect_date', 'expiry_date')->where('service_id', 7);
    }
    public function headings(): array
    {
        return [
            '#',
            'Licence ID',
            'Company Name',
            'Class',
            'Phone 1',
            'Phone 2',
            'Email',
            'Physical Address',
            'Digital Address',
            'P.O Box Address',
            'Effective Date',
            'Expiration Date',
        ];
    }
}
