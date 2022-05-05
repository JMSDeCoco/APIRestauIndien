import React, { useState,useEffect} from "react";
import * as  emailjs from '@emailjs/browser';
import { Form, Button, Modal, Row, Col } from "react-bootstrap";
import {getPlat} from "../Api/Services";

function MenuModal({showMenu, setShowMenu}) {
  const [p, setP] = useState({});

  /*
  const [lastAnnonces, setLastAnnonces] = useState([]);

  useEffect(() => {
    const fetchData = async () => {
      try {
        const responseUser = await AnnonceService.getLastAnnonce(5);
        setLastAnnonces(responseUser);
      } catch (error) {
        console.error(error.message);
      }
    };

    fetchData();
  }, []);*/
  useEffect(()=>{
    const fetchData = async () => {
        try {
            console.log(await getPlat());
            const responseUser = await getPlat()
            setP(responseUser)
        } catch (error) {
            console.error(error.message);
          }
        }
        fetchData();
  },[]);



  return (
    <Modal
      show={showMenu}
      onHide={() => setShowMenu(false)}
      dialogClassName="modal-90w"
      aria-labelledby="example-custom-modal-styling-title"
    >
      <Modal.Header closeButton>
        <Modal.Title id="Menu">Menu</Modal.Title>
      </Modal.Header>
      <Modal.Body>
        {p.plats.map((el)=>(
            <li>(el.nom)</li>
        ))}
      </Modal.Body>
    </Modal>
  );
  }

export default MenuModal;
