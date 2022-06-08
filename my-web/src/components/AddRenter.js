import React, { useEffect, useState } from 'react'
import RenterDataTable from './RenterTable';
import axios from 'axios';

function AddRenter() {
    const [refresh, setRefresh] = useState(false);
    const [renterData, setRenterData] = useState([]);
    // const [contractData, setContractData] = useState([])
    // const [name, setName] = useState("");
    // const [surname, setSurame] = useState("");
    // const [phone, setPhone] = useState("");
    // const [tcno, setTcno] = useState("");
    useEffect(() => {
        axios.get("http://127.0.0.1:8000/api/renter/show").then((res) => {
            setRenterData(res.data.renterData);
            // setContractData(res.data.contractData);
            console.log(res);
        }).catch((error) => {
            console.log(error);
        })
    }, [refresh])
    console.log(renterData)
    // console.log(contractData);
    return (
        <div>
            <RenterDataTable
                renterData={renterData}
            // contractData={contractData}
            />
        </div>
    )
}

export default AddRenter
