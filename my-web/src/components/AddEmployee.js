import React, { useEffect, useState } from 'react'
import EmployeeDataTable from './EmployeeTable';
import axios from 'axios';

function AddEmployee() {
    const [refresh, setRefresh] = useState(false);
    const [employeeData, setEmployeeData] = useState([]);
    // const [name, setName] = useState("");
    // const [surname, setSurame] = useState("");
    // const [phone, setPhone] = useState("");
    // const [tcno, setTcno] = useState("");
    useEffect(() => {
        axios.get("http://127.0.0.1:8000/api/employee/show").then((res) => {
            setEmployeeData(res.data.employeeData);
            console.log(res);
        }).catch((error) => {
            console.log(error);
        })
    }, [refresh])

    return (
        <div>
            <EmployeeDataTable
                employeeData={employeeData}
            />
        </div>
    )
}

export default AddEmployee
