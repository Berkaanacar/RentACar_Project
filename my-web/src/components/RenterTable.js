import React from 'react'
import RenterTable from 'react-data-table-component';

function RenterDataTable({ renterData }) {
    console.log(renterData)
    // console.log(contractData);
    const columns = [
        {
            name: 'Name',
            selector: row => row?.get_info.name,
        },
        {
            name: 'Surname',
            selector: row => row?.get_info.surname,
        },
        {
            name: 'Car',
            selector: row => row?.get_cars.plaque,
        },
        {
            name: 'Start Date',
            selector: row => row?.get_contract?.start_date,
        },
        {
            name: 'End Date',
            selector: row => row?.get_contract?.end_date,
        },
    ];

    return (
        <RenterTable
            columns={columns}
            data={renterData}
        // data1={contractData}
        />
    );
}
export default RenterDataTable
