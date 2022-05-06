import React, {useState} from 'react'
import {Form, Button,Modal} from "react-bootstrap";
import {login} from "../Api/Services"


function SignInModal({ showSignIn, setShowSignIn }) {
  const[values, setValues] = useState({
    email: "",
    password: ""
});
const handleChange = (event) => {  
  const {name, value} = event.target;
  setValues({...values,[name]: value});
};
const handleSubmit = async(event) => {
  event.preventDefault();
  const status = await login(values.email, values.password)
  console.log(status)
  if (status === 200) {
    setShowSignIn(false);
        window.location.reload();
  }
}
  return (
    <Modal
        show={showSignIn}
        onHide={() => setShowSignIn(false)}
        dialogClassName="modal-90w"
        aria-labelledby="example-custom-modal-styling-title"
      >
        <Modal.Header closeButton>
          <Modal.Title id="SignIn">
            Sign In
          </Modal.Title>
        </Modal.Header>
        <Modal.Body>
          <Form className="modal-content form-elegant" onSubmit={handleSubmit}>
            <Form.Group className="mb-3" controlId="formBasicEmail">
              <Form.Label>Email address</Form.Label>
              <Form.Control name="email" type="email" placeholder="Enter email" onChange={handleChange} />
              <Form.Text className="text-muted">
                We will never share your email with anyone else.
              </Form.Text>
            </Form.Group>
          
            <Form.Group className="mb-3" controlId="formBasicPassword">
              <Form.Label>Password</Form.Label>
              <Form.Control name="password" type="password" placeholder="Password" onChange={handleChange} />
            </Form.Group>
            <Button variant="primary" type="submit">
              Sign In
            </Button>
          </Form>
        </Modal.Body>
      </Modal>
  )
}

export default SignInModal