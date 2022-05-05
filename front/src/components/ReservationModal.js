import React, { useState,useRef } from "react";
import * as  emailjs from '@emailjs/browser';
import { Form, Button, Modal, Row, Col } from "react-bootstrap";

function ReservationModal({ showReservation, setShowReservation }) {
  const [values, setValues] = useState({
    name: "",
    email: "",
    number: "",
    hour: "",
    day: "",
    nbr: ""
  });
  const form = useRef();

  const sendEmail = (e) => {
    e.preventDefault();

    emailjs.sendForm('service_7agd8mc', 'template_v7riicf', form.current, 'user_MHnLpCSp1i5VWkofm2vyl')
      .then((result) => {
        console.log(form.current);
        console.log(result.status);
      }, (error) => {
        console.log(error.text);
      });
  };
  const handleChange = event => {
    const { name, value } = event.target;
    setValues({ ...values, [name]: value });
  };
  return (
    <Modal
      show={showReservation}
      onHide={() => setShowReservation(false)}
      dialogClassName="modal-90w"
      aria-labelledby="example-custom-modal-styling-title"
    >
      <Modal.Header closeButton>
        <Modal.Title id="Reservation">Reservation</Modal.Title>
      </Modal.Header>
      <Modal.Body>
        <Form ref={form} className="modal-content form-elegant" onSubmit={sendEmail}>
          <Form.Group className="mb-3" controlId="formBasicName">
            <Form.Label>Name</Form.Label>
            <Form.Control name="name" type="text" placeholder="Enter your name" onChange={handleChange} />
            <Form.Text className="text-muted">
              We will never share your name with anyone else.
            </Form.Text>
          </Form.Group>
          <Form.Group className="mb-3" controlId="formBasicEmail">
            <Form.Label>Email address</Form.Label>
            <Form.Control name="email" type="email" placeholder="Enter email" onChange={handleChange} />
            <Form.Text className="text-muted">
              We will never share your email with anyone else.
            </Form.Text>
          </Form.Group>
          <Form.Group className="mb-3" controlId="formBasicNumber">
            <Form.Label>Phone Number</Form.Label>
            <Form.Control name="number" type="int" placeholder="Enter phone number " onChange={handleChange} />
            <Form.Text className="text-muted">
              We will never share your phone number with anyone else.
            </Form.Text>
          </Form.Group>
          <Row className="mb-3">
            <Form.Group as={Col}>
              <Form.Select name="hour" as={Col} size="sm" onChange={handleChange}>
                <option>Select Hour </option>
                <option value="12:00">12:00</option>
                <option value="13:00">13:00</option>
                <option value="14:00">14:00</option>
                <option value="18:00">18:00</option>
                <option value="19:00">19:00</option>
                <option value="20:00">20:00</option>
                <option value="21:00">21:00</option>
              </Form.Select>
            </Form.Group>
            <Form.Group as={Col}>
              <Form.Select name="day" size="sm" onChange={handleChange}>
                <option>Select Day </option>
                <option value="Lundi">Lundi</option>
                <option value="2">Mardi</option>
                <option value="Mardi">Mercredi</option>
                <option value="Jeudi">Jeudi</option>
                <option value="Vendredi">Vendredi</option>
                <option value="Samedi">Samedi</option>
                <option value="Dimanche">Dimanche</option>
              </Form.Select>
            </Form.Group>
            <Form.Group as={Col}>
              <Form.Select name="nbr" size="sm" onChange={handleChange}>
                <option>Select Day </option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
              </Form.Select>
            </Form.Group>
          </Row>
          <Button variant="primary" type="submit">
            Reserve
          </Button>
        </Form>
      </Modal.Body>
    </Modal>
  );
}

export default ReservationModal;
