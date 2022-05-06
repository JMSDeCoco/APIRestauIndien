import React from 'react'
import { Navbar, Container, Nav, Button } from "react-bootstrap";
import { FaShoppingCart } from 'react-icons/fa';
import { Link } from 'react-router-dom';

function NavBar({setShowSignIn,setShowSignUp,setShowReservation, setShowMenu}) {

  const token = localStorage.getItem("token");
  const handleLogout = () => {
    localStorage.clear();
    window.location.reload();
    // navigate("/");
      }
  return (
    <Navbar bg="light" expand="lg">
        <Container fluid>
          <Navbar.Brand href="#">Hindi Food</Navbar.Brand>
          <Navbar.Toggle aria-controls="navbarScroll" />
          <Navbar.Collapse id="navbarScroll">
            <Nav
              className="me-auto my-2 my-lg-0"
              style={{ maxHeight: '100px' }}
              navbarScroll
            >
              <Nav.Link onClick={()=>setShowMenu(true)}>Menu</Nav.Link>
              <Nav.Link onClick={()=>setShowReservation(true)}>Reservation</Nav.Link>
              <Nav.Link href="/Panier">Panier</Nav.Link>
            </Nav>
            <div className="d-flex">
            {!token ? (<div> <Button variant="outline-success" onClick={() => setShowSignIn(true)}>Sign In</Button>
              <Button variant="outline-success" onClick={() => setShowSignUp(true)}>Sign Up</Button></div>) 
              
              : (<div className="d-flex items-center">
               <Button variant="outline-failed" >Bienvenue {JSON.parse(localStorage.getItem("client")).nom}</Button>
                 <Button variant="outline-failed" onClick={() => handleLogout()}>logout</Button></div> ) } 
              <Nav
                className="me-auto my-2 my-lg-0"
                style={{ maxHeight: '100px' }}
                navbarScroll
              >
                <Nav.Link href="#action1"><FaShoppingCart/></Nav.Link>
              </Nav>
            </div>
          </Navbar.Collapse>
        </Container>
      </Navbar>
  )
}

export default NavBar