<?php

namespace App\Tables;

use App\Models\Mortgage;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\SpladeTable;

class Mortgages extends AbstractTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the user is authorized to perform bulk actions and exports.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        return true;
    }

    /**
     * The resource or query builder.
     *
     * @return mixed
     */
    public function for()
    {
        return Mortgage::query();
    }

    /**
     * Configure the given SpladeTable.
     *
     * @param \ProtoneMedia\Splade\SpladeTable $table
     * @return void
     */
    public function configure(SpladeTable $table)
    {
        $table
            ->withGlobalSearch(columns: ['id', 'FIO'])
            ->searchInput('FIO')
            ->perPageOptions([50, 100, 200])
            ->paginate(15)

            ->column('id', sortable: true, label: 'ddd')
            ->column('FIO',sortable: true)
            ->column('phone',sortable: true)
            ->column('FIO_zaym',sortable: true)
            ->column('phone_zaym',sortable: true)
            ->column('bank',sortable: true)
            ->column('programm',sortable: true)
            ->column('type_object',sortable: true)
            ->column('sum_credit',sortable: true)
            ->column('save_service',sortable: true)
            ->column('save_service_base',sortable: true)
            ->column('kv_base_save_service',sortable: true)
            ->column('dop_save_service',sortable: true)
            ->column('kv_dop_save_service',sortable: true)
            ->column('kv_bank_sum',sortable: true)
            ->column('provision',sortable: true)
            ->column('office',sortable: true)
            ->column('expert',sortable: true)
            ->column('broker',sortable: true)
            ->column('status_deal',sortable: true)
            ->column('active',sortable: true)
            ->column('created_at',sortable: true)
            ->column('updated_at',sortable: true)
            ->column('comment',sortable: true)
            ->column('first_contact_date',sortable: true)
            ->column('first_visit_bank_date',sortable: true)
            ->column('first_good_date',sortable: true)
            ->column('close_client_date',sortable: true)
            ->column('pay_day_save',sortable: true)
            ->column('pay_day_bank',sortable: true)
            ->column('pay_day_contractor',sortable: true)
            ->column('deposit_date',sortable: true)
            ;




//             ->selectFilter()
//             ->withGlobalSearch()

//             ->bulkAction()
//             ->export();
    }
}
