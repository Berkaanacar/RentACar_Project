import logo from './logo.svg';
import './App.css';
// import React from 'react-strap';
// import EmployeeTable from './components/EmployeeTable';
// import RenterTable from './components/RenterTable';
import AddEmployee from './components/AddEmployee';
import { useEffect, useState } from 'react';
import AddRenter from './components/AddRenter';


function App() {
  // const [employeeData, setEmployeeData] = useState([]);
  // const [renterData, setRenterData] = useState([]);
  // const [information, setInformation] = useState({
  //   name: "",
  //   surname: "",
  // })
  const [isVisible, setIsVisible] = useState(true);
  const [showHide, setShowHide] = useState(false);
  const showCars = () => setShowHide(true);


  const closeCars = () => setShowHide(false);

  return (
    <div className='App'>
      <div className="container">
        <div className='row'>
          <button className='btn btn-primary' type='button' name='contractBtn' onClick={() => setIsVisible(true)} onDoubleClick={() => setIsVisible(false)}>Add Contract</button>
        </div>
        <div className="row">
          <div className="col-lg-6">
            <h3>Employee Table</h3>
            <AddEmployee />
          </div>
          <div className="col-lg-6">
            <h3>Renter Table</h3>
            <AddRenter />
          </div>
        </div>
        <div className='container' id='cars' style={{ display: isVisible ? "block" : "none" }}>
          <div className='row'>
            <label className='d-flex'><h4>Cars</h4></label>
            <button className='col-1 btn btn-primary mt-1'>Audi</button>
            <button className='col-1 btn btn-primary mt-1'>Mercedes</button>
          </div>
        </div>
      </div>
    </div>
  );
}

export default App;
