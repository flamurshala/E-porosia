import React from "react";

import PropTypes from "prop-types";

import "./blog-post-card.css";

const BlogPostCard = (props) => {
  return (
    <div className={`blog-post-card-blog-post-card ${props.rootClassName} `}>
      <img
        alt={props.image_alt}
        src={props.image_src}
        className="blog-post-card-image"
      />
      <div className="blog-post-card-container">
        <span className="blog-post-card-text">{props.new_prop}</span>
        <span className="blog-post-card-text1">{props.description}</span>
        <a
          href="http://localhost/lab%20course%201/E-porosia/src/kategories/dhomeDitore.php"
          target="_blank"
          rel="noreferrer noopener"
          className="button"
        >
          Më Shum!
        </a>
      </div>
    </div>
  );
};

BlogPostCard.defaultProps = {
  image_alt: "image",
  rootClassName: "",
  new_prop: "Ngritni hapësirën tuaj të jetesës me rehati dhe stil!",
  image_src:
    "https://images.unsplash.com/photo-1523906834658-6e24ef2386f9?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDF8fHZlbmljZXxlbnwwfHx8fDE2MjYyNzIyOTA&ixlib=rb-1.2.1&w=1500",
  description: "Zbuloni modelet më të fundit të divaneve të vitit 2023: Moderne, elegante dhe të rehatshme. Përmirësoni hapësirën tuaj të jetesës me kolltukë në modë që ndërthurin funksionalitetin dhe elegancën. Përjetoni rehati të pashoqe dhe çlironi stilin tuaj me koleksionin tonë të ri!",
  link_to: "",
};

BlogPostCard.propTypes = {
  image_alt: PropTypes.string,
  rootClassName: PropTypes.string,
  new_prop: PropTypes.string,
  image_src: PropTypes.string,
  description: PropTypes.string,
  link_to: PropTypes.string,
};

export default BlogPostCard;
