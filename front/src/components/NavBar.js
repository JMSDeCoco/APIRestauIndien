import React from 'react'
import { Navbar, Container, Nav, Button } from "react-bootstrap";
import { FaShoppingCart } from 'react-icons/fa';


function NavBar({setShowSignIn,setShowSignUp,setShowReservation}) {
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
              <Nav.Link href="#action1">Menu</Nav.Link>
              <Nav.Link onClick={()=>setShowReservation(true)}>Reservation</Nav.Link>
              
            </Nav>
            <div className="d-flex">
              <Button variant="outline-success" onClick={() => setShowSignIn(true)}>Sign In</Button>
              <Button variant="outline-success" onClick={() => setShowSignUp(true)}>Sign Up</Button>
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