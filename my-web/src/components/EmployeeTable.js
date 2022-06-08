import React from 'react'
import EmployeeTable from 'react-data-table-component';

function EmployeeDataTable({ employeeData }) {

    const columns = [
        {
            name: 'Name',
            selector: row => row?.get_info?.name,
        },
        {
            name: 'Surname',
            selector: row => row?.get_info?.surname,
        },
        {
            name: 'Phone',
            selector: row => row?.get_info?.phone,
        },
    ];

    return (
        <EmployeeTable
            columns={columns}
            data={employeeData}
        />
    );
}
export default EmployeeDataTable
