import React from "react";

import PropTypes from "prop-types";

import "./item-card.css";

const ItemCard = (props) => {
  return (
    <div className={`item-card-gallery-card ${props.rootClassName} `}>
      <img
        alt={props.image_alt}
        src={props.image_src}
        className="item-card-image"
      />
      <div className="item-card-container">
        <h3 className="item-card-text">{props.name}</h3>
        <div className="item-card-container1">
     
           
        </div>
        <div className="item-card-container2">
          {/* <span className="item-card-currency"></span> */}
          {/* <span className="item-card-value"></span> */}
        </div>
      </div>
    </div>
  );
};

ItemCard.defaultProps = {
  name: "Project Title",
  image_src:
    "https://images.unsplash.com/photo-1484980972926-edee96e0960d?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDI0fHxmb29kfGVufDB8fHx8MTYyNjQ0OTIzNQ&ixlib=rb-1.2.1&w=1500",
  image_alt: "image",
  currency: "",
  value: "",
  rootClassName: "",
};

ItemCard.propTypes = {
  name: PropTypes.string,
  image_src: PropTypes.string,
  image_alt: PropTypes.string,


  rootClassName: PropTypes.string,
};

export default ItemCard;
