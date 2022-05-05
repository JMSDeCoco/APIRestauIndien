import { useState } from "react";
import { Row, Col } from "react-bootstrap";
import NavBar from "../components/NavBar";
import ReservationModal from "../components/ReservationModal";
import SignInModal from "../components/SignInModal";
import SignUpModal from "../components/SignUpModal";

const HomePage = () => {
  const [showSignIn, setShowSignIn] = useState(false);
  const [showSignUp, setShowSignUp] = useState(false);
  const [showReservation, setShowReservation] = useState(false);

  return (
    <div>
      <NavBar
        setShowSignIn={setShowSignIn}
        setShowSignUp={setShowSignUp}
        setShowReservation={setShowReservation}
      />
      <h1>Bienvenue chez Hindi Food</h1>
      <p>Vous avez faim ? Ca tombe bien !</p>
      <div>
        <p>
          Nous pratiquons la cuisine indienne, traditionnelle, et même moderne
          afin de satisfaire tous les goûts et toutes les envies. Notre
          restaurant est ancré dans les valeurs et la culture indienne, des
          parfums aux saveurs en passant par les sons et lenvironnement, vous
          serez en immersion totale dans la culture indienne.
        </p>
      </div>
      <Row className="justify-content-md-center">
        <Col xs lg="3">
          <h5>Adresse :</h5>
          <p>
          Immeuble Le Sésame, 8 Rue Germain Soufflot, 78180 Montigny-le-Bretonneux
          </p>
        </Col>
        <Col xs lg="5" id="map" />
      </Row>

      <SignUpModal showSignUp={showSignUp} setShowSignUp={setShowSignUp} />
      <SignInModal showSignIn={showSignIn} setShowSignIn={setShowSignIn} />
      <ReservationModal
        showReservation={showReservation}
        setShowReservation={setShowReservation}
      />
    </div>
  );
};

export default HomePage;
