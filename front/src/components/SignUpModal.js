import React, { useState } from "react";
import { Form, Button, Modal } from "react-bootstrap";
import { signup } from "../Api/Services";

function SignUpModal({ showSignUp, setShowSignUp }) {
  const [values, setValues] = useState({
    name: "",
    email: "",
    number: "",
    password: ""
  });
  const handleChange = event => {
    const { name, value } = event.target;
    setValues({ ...values, [name]: value });
  };

  const handleSubmit = event => {
    event.preventDefault();
    signup(values.name, values.email, values.number, values.password)
      .then(response => {
        //this.setState({error: ""});
        //this.props.updateUser(response);
        console.log(response);
        //this.props.history.push('/dashboard');
        setShowSignUp(false);
      })
      .catch(error => console.log(error.response.data.message));
  };
  return (
    <Modal
      show={showSignUp}
      onHide={() => setShowSignUp(false)}
      dialogClassName="modal-90w"
      aria-labelledby="example-custom-modal-styling-title"
    >
      <Modal.Header closeButton>
        <Modal.Title id="SignUp">Sign Up</Modal.Title>
      </Modal.Header>
      <Modal.Body>
        <Form className="modal-content form-elegant" onSubmit={handleSubmit}>
          <Form.Group className="mb-3" controlId="formBasicName">
            <Form.Label>Name</Form.Label>
            <Form.Control
              name="name"
              type="text"
              placeholder="Enter your name"
              onChange={handleChange}
            />
            <Form.Text className="text-muted">
              We will never share your name with anyone else.
            </Form.Text>
          </Form.Group>
          <Form.Group className="mb-3" controlId="formBasicEmail">
            <Form.Label>Email address</Form.Label>
            <Form.Control
              name="email"
              type="email"
              placeholder="Enter email"
              onChange={handleChange}
            />
            <Form.Text className="text-muted">
              We will never share your email with anyone else.
            </Form.Text>
          </Form.Group>
          <Form.Group className="mb-3" controlId="formBasicNumber">
            <Form.Label>Phone Number</Form.Label>
            <Form.Control
              name="number"
              type="int"
              placeholder="Enter phone number "
              onChange={handleChange}
            />
            <Form.Text className="text-muted">
              We will never share your phone number with anyone else.
            </Form.Text>
          </Form.Group>

          <Form.Group className="mb-3" controlId="formBasicPassword">
            <Form.Label>Password</Form.Label>
            <Form.Control
              name="password"
              type="password"
              placeholder="Password"
              onChange={handleChange}
            />
          </Form.Group>
          <Button variant="primary" type="submit">
            Sign Up
          </Button>
        </Form>
      </Modal.Body>
    </Modal>
  );
}

export default SignUpModal;
