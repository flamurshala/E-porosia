import React from "react";

import { Helmet } from "react-helmet";

import SectionHeading from "../components/section-heading";
import CategoryCard from "../components/category-card";
import ItemCard from "../components/item-card";
import BlogPostCard from "../components/blog-post-card";
import "./home.css";
import slideImg1 from '../img/download.png';
import slideImg2 from '../img/sale.png';

const Home = (props) => {
  return (
    <div className="home-container">
      <Helmet>
        <title>E-porosia</title>
      </Helmet>
      <div className="home-navbar">
        <header data-role="Header" className="home-header max-width-container">
          <div className="home-navbar1">
            <div className="home-container01">
            </div>
            <div className="home-middle">
              <div className="home-left">
               {/* create API to connect to PHP */}
                <a href="http://localhost/lab%20course%201/E-porosia/src/kategories/index.php"><span className="navbar-link">BLEJ</span></a>
                <a href="http://localhost/lab%20course%201/E-porosia/src/kategories/dhomeDitore.php"><span className="navbar-link">DHOME DITORE</span></a>
                <a href="http://localhost/lab%20course%201/E-porosia/src/kategories/dekor.php"><span className="navbar-link">DEKOR</span></a>
              </div>
              <span className="navbar-logo-title">E-Porosia</span>
              <div className="home-right">
                {/* create API to connect to PHP */}
              <a href="http://localhost/lab%20course%201/E-porosia/src/kategories/banjo.php"><span className="navbar-link">BANJO</span></a>
              <a href="http://localhost/lab%20course%201/E-porosia/src/information/aboutus.html"><span className="navbar-link">RRETH NESH</span></a>
                <a href="http://localhost/lab%20course%201/E-porosia/src/information/kontakti.php"><span className="navbar-link">KONTAKT</span></a>
              </div>
            </div>
            <div className="home-icons">
              {/* create API to connect to PHP */}
            <a href="http://localhost/lab%20course%201/E-porosia/src/kategories/cart.php"><img
                alt="iconsbxscart3271299"
                src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0nMjQnIGhlaWdodD0nMjQnIHZpZXdCb3g9JzAgMCAyNCAyNCcgZmlsbD0nbm9uZScgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJz4KPHBhdGggZD0nTTIxLjgyMiA3LjQzMUMyMS42MzUgNy4xNjEgMjEuMzI4IDcgMjEgN0g3LjMzM0w2LjE3OSA0LjIzQzUuODY3IDMuNDgyIDUuMTQzIDMgNC4zMzMgM0gyVjVINC4zMzNMOS4wNzcgMTYuMzg1QzkuMjMyIDE2Ljc1NyA5LjU5NiAxNyAxMCAxN0gxOEMxOC40MTcgMTcgMTguNzkgMTYuNzQxIDE4LjkzNyAxNi4zNTJMMjEuOTM3IDguMzUyQzIyLjA1MiA4LjA0NCAyMi4wMDkgNy43IDIxLjgyMiA3LjQzMVonIGZpbGw9JyMxNjE2MTYnLz4KPHBhdGggZD0nTTEwLjUgMjFDMTEuMzI4NCAyMSAxMiAyMC4zMjg0IDEyIDE5LjVDMTIgMTguNjcxNiAxMS4zMjg0IDE4IDEwLjUgMThDOS42NzE1NyAxOCA5IDE4LjY3MTYgOSAxOS41QzkgMjAuMzI4NCA5LjY3MTU3IDIxIDEwLjUgMjFaJyBmaWxsPScjMTYxNjE2Jy8+CjxwYXRoIGQ9J00xNy41IDIxQzE4LjMyODQgMjEgMTkgMjAuMzI4NCAxOSAxOS41QzE5IDE4LjY3MTYgMTguMzI4NCAxOCAxNy41IDE4QzE2LjY3MTYgMTggMTYgMTguNjcxNiAxNiAxOS41QzE2IDIwLjMyODQgMTYuNjcxNiAyMSAxNy41IDIxWicgZmlsbD0nIzE2MTYxNicvPgo8L3N2Zz4K"
                className="home-image1"
              /></a>
               
           
               {/* create API to connect to PHP */}
             <a href="http://localhost/lab%20course%201/E-porosia/src/login%20and%20register/login.php"> <img
                alt="AccountCircle3271301"
                src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0nMjQnIGhlaWdodD0nMjQnIHZpZXdCb3g9JzAgMCAyNCAyNCcgZmlsbD0nbm9uZScgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJz4KPHBhdGggZD0nTTEyIDJDNi40OCAyIDIgNi40OCAyIDEyQzIgMTcuNTIgNi40OCAyMiAxMiAyMkMxNy41MiAyMiAyMiAxNy41MiAyMiAxMkMyMiA2LjQ4IDE3LjUyIDIgMTIgMlpNMTIgNUMxMy42NiA1IDE1IDYuMzQgMTUgOEMxNSA5LjY2IDEzLjY2IDExIDEyIDExQzEwLjM0IDExIDkgOS42NiA5IDhDOSA2LjM0IDEwLjM0IDUgMTIgNVpNMTIgMTkuMkM5LjUgMTkuMiA3LjI5IDE3LjkyIDYgMTUuOThDNi4wMyAxMy45OSAxMCAxMi45IDEyIDEyLjlDMTMuOTkgMTIuOSAxNy45NyAxMy45OSAxOCAxNS45OEMxNi43MSAxNy45MiAxNC41IDE5LjIgMTIgMTkuMlonIGZpbGw9JyMxNjE2MTYnLz4KPC9zdmc+Cg=="
                className="home-image3"
              /></a>
            </div>
          </div>
          <div data-role="BurgerMenu" className="home-burger-menu">
            <svg viewBox="0 0 1024 1024" className="home-icon">
              <path d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"></path>
            </svg>
          </div>
          <div data-role="MobileMenu" className="home-mobile-menu">
            <div className="home-nav">
              <div className="home-container02">
                <span className="home-logo-center1">E-Porosia</span>
                <div
                  data-role="CloseMobileMenu"
                  className="home-close-mobile-menu"
                >
                  <svg viewBox="0 0 1024 1024" className="home-icon02">
                    <path d="M810 274l-238 238 238 238-60 60-238-238-238 238-60-60 238-238-238-238 60-60 238 238 238-238z"></path>
                  </svg>
                </div>
              </div>
              <div className="home-middle1">
                <span className="home-text06">SHOP</span>
                <span className="home-text07">LOOKBOOK</span>
                <span className="home-text08">SPECIAL</span>
                <span className="home-text09">ABOUT</span>
                <span className="home-text10">BLOG</span>
                <span className="home-text11" >CONTACT</span>
              </div>
            </div>
            <div>
              <svg viewBox="0 0 950.8571428571428 1024" className="home-icon04">
                <path d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"></path>
              </svg>
              <svg viewBox="0 0 877.7142857142857 1024" className="home-icon06">
                <path d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"></path>
              </svg>
              <svg viewBox="0 0 602.2582857142856 1024" className="home-icon08">
                <path d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z"></path>
              </svg>
            </div>
          </div>
        </header>
      </div>
      <div className="home-main">
        <div className="home-hero section-container">
          <div className="home-max-width max-width-container">
            <div className="home-hero1">
              <div className="home-container03">
                <div className="home-info">
                  <img
                    alt="Rectangle43271305"
                    src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0nMicgaGVpZ2h0PSc1Micgdmlld0JveD0nMCAwIDIgNTInIGZpbGw9J25vbmUnIHhtbG5zPSdodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2Zyc+CjxyZWN0IHdpZHRoPScyJyBoZWlnaHQ9JzUyJyBmaWxsPSdibGFjaycgZmlsbC1vcGFjaXR5PScwLjUnLz4KPC9zdmc+Cg=="
                    className="home-image4"
                  />
                  <span className="home-text12">
                    <span>Mobilje</span>
                    <br></br>
                    <span>trendet - 2023</span>
                  </span>
                </div>
                <h1 className="home-text16 Heading-1">Yellowstone</h1>
                <div className="home-container04">
                  <span className="home-text17">PREJ</span>
                  <span className="home-text18">339€</span>
                </div>
                <div className="home-btn-group">
                {/* create API to connect to PHP */}
                  <a href="http://localhost/lab%20course%201/E-porosia/src/kategories/index.php"><button className="button">Exploro Koleksionin</button></a>
                </div>
              </div>
              
              <img className="home-image5" src={slideImg1}/>

            </div>
          </div>
        </div>
        <div className="section-container column">
          <div className="max-width-container">
            <SectionHeading
              heading="Kategoritë"
              subtitle="Eksploroni gamën tonë të gjerë të kategorive"
            ></SectionHeading>
            <div className="home-cards-container">
              {/* change the paths below acordingly */}
            <a href="http://localhost/lab%20course%201/E-porosia/src/kategories/dhomeDitore.php"><CategoryCard
                name="Dhomë Ditore"
                category_img="https://3.bp.blogspot.com/-hqLLNEiurTo/V3LzYk_qSwI/AAAAAAAAA40/VgoIHNdIweYbJpEXuCgoGB3D47umzfKVgCLcB/s1600/Small-Living-Room-Furniture-Ideas.jpg"
              ></CategoryCard></a>
               {/* change the paths below acordingly */}
              <a href="http://localhost/lab%20course%201/E-porosia/src/kategories/gjum.php"><CategoryCard
                name="Gjumë"
                category_img="https://th.bing.com/th/id/OIP.3Pb3RwfydbELK7hxYcfwTQHaFu?pid=ImgDet&rs=1"
              ></CategoryCard></a>
              {/* change the paths below acordingly */}
             <a href="http://localhost/lab%20course%201/E-porosia/src/kategories/pune.php"><CategoryCard
                name="Pune"
                category_img="https://th.bing.com/th/id/R.2a23f283b3ad53a9fdc81e635c0d53de?rik=NTP5JAHJhknqGA&pid=ImgRaw&r=0"
              ></CategoryCard></a>
              {/* change the paths below acordingly */}
                <a href="http://localhost/lab%20course%201/E-porosia/src/kategories/banjo.php"><CategoryCard
                name="Banjo"
                category_img="https://th.bing.com/th/id/R.ca47e77a7a322bae394c256058f9977a?rik=tw6lAdnsB6J10Q&pid=ImgRaw&r=0"
              ></CategoryCard></a>
              {/* create API to connect to PHP */}
              <a href="http://localhost/lab%20course%201/E-porosia/src/kategories/dekor.php"><CategoryCard
                name="Dekor"
                category_img="https://images.unsplash.com/photo-1558882224-dda166733046?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDN8fGRlY29yYXRpb258ZW58MHx8fHwxNjUyODIyMDkx&amp;ixlib=rb-1.2.1&amp;h=200"
              ></CategoryCard></a>
              {/* create API to connect to PHP */}
              <a href="http://localhost/lab%20course%201/E-porosia/src/kategories/kuzhine.php"><CategoryCard
                name="Kuzhinë"
                category_img="https://3.bp.blogspot.com/-hqLLNEiurTo/V3LzYk_qSwI/AAAAAAAAA40/VgoIHNdIweYbJpEXuCgoGB3D47umzfKVgCLcB/s1600/Small-Living-Room-Furniture-Ideas.jpg"
              ></CategoryCard></a>
            </div>
          </div>
          <div className="home-banner">
            <div className="home-container05">
              <h3 className="home-text19 Heading-3">E-Porosia</h3>
              <span className="home-text20">
                <span></span>
                <span>mobilje</span>
              </span>
            </div>
          </div>
          <div className="home-container06 max-width-container">
            <div className="home-container07">
              <span className="home-text23">
                <h2>Treg unik i mobiljeve moderne.</h2>
                <br></br>
                <span>
                  Ne jemi krenarë që ofrojmë mobilje cilësore të lartë në çmime
                  konkurruese. Nga dizajnet moderne dhe bashkëkohore deri te ato
                  klasike dhe kohëpaskohëse, koleksioni ynë është kujdesur me
                  kujdes për të shërbyer një gamë të gjerë të shijeve dhe
                  preferencave.
                  <span
                    dangerouslySetInnerHTML={{
                      __html: " ",
                    }}
                  />
                </span>
              </span>
                    {/* create API to connect to PHP */}
              <a href="http://localhost/lab%20course%201/E-porosia/src/information/aboutus.html"><button className="button">Rreth nesh</button></a> 
            </div>
          </div>
        </div>
        <div className="home-full-width-banner section-container">
          <div className="home-left4">
            <div className="home-content">
              <span className="home-text29">ZBRITJE</span>
              <span className="home-text30">
              Blini tani dhe kurseni me 25% ulje në produktet e zgjedhura!
              </span>
            </div>
            <div className="home-btn button">
              {/* create API to connect to PHP */}
              <a href="http://localhost/lab%20course%201/E-porosia/src/kategories/sale.php"><span className="home-text31">Eksploro</span></a>
            </div>
          </div>
          <img className="home-image6" src={slideImg2}/>
        </div>
        <div className="section-container">
          <div className="max-width-container">
            <SectionHeading></SectionHeading>
            <div className="home-gallery">
              <div className="home-left1">
                <ItemCard
                  name="Amazing Bulb"
                  value="5"
                  image_src="https://images.unsplash.com/photo-1593256013337-62c77fe20ef5?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDIwfHxsaWdodCUyMGxhbXB8ZW58MHx8fHwxNjUyODE4MzQy&amp;ixlib=rb-1.2.1&amp;h=1500"
                  rootClassName="rootClassName4"
                ></ItemCard>
              </div>
              <div className="home-right1">
                <div className="home-top">
                  <div className="home-left2">
                    <ItemCard
                      name="Luxury Executive Chair"
                      image_src="https://images.unsplash.com/photo-1601366533287-5ee4c763ae4e?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDE3fHxjaGFpcnxlbnwwfHx8fDE2NjY3ODA3MTk&amp;ixlib=rb-4.0.3&amp;w=1500"
                      rootClassName="rootClassName2"
                    ></ItemCard>

                  </div>
                  <div className="home-right2">
                    <ItemCard
                      name="Stylish Garden Chair"
                      value="299"
                      image_src="https://images.unsplash.com/photo-1598300042247-d088f8ab3a91?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDEzfHxjaGFpcnxlbnwwfHx8fDE2NTI4MTgxODk&amp;ixlib=rb-1.2.1&amp;h=1500"
                      rootClassName="rootClassName3"
                    ></ItemCard>
                  </div>
                </div>
                <div className="home-bottom">
                  <div className="home-left3">
                    <ItemCard
                      name="Black Studio Lamp"
                      value="149"
                      image_src="https://images.unsplash.com/photo-1543512214-4f76e81f8bfc?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDM2fHxsYW1wfGVufDB8fHx8MTY2Njc4MDc4OQ&amp;ixlib=rb-4.0.3&amp;w=1500"
                      rootClassName="item-card-root-class-name1"
                    ></ItemCard>

                  </div>
                  <div className="home-right3">
                    <ItemCard
                      name="Jars"
                      value="49"
                      image_src="https://images.unsplash.com/photo-1525705235800-a0c174299118?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDU0fHx3b29kZW4lMjBqYXJ8ZW58MHx8fHwxNjY2NzgxMDQ2&amp;ixlib=rb-4.0.3&amp;w=1500"
                      rootClassName="item-card-root-class-name6"
                    ></ItemCard>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div className="home-footer">
        <div className="max-width-container">
          <footer className="home-footer1">
            <div className="home-container09">
              <h3 className="home-text32 Heading-3">E-Porosia</h3>
              <span className="home-text33">
                <span>Birgada 123, Suharek </span>
                <br></br>
                <span>Kosovë</span>
              </span>
              <span className="home-text36">(383)49-826096</span>
              <span className="home-text37">contact@eporosia.com</span>
            </div>
            <div className="home-links-container">
              <div className="home-container10">
                <span id="footer-kat" className="home-text38">
                  Kategoritë
                </span>
                {/* create API to connect to PHP */}
                <a href="http://localhost/lab%20course%201/E-porosia/src/kategories/dhomeDitore.php"><span className="home-text39">Dhome ditore</span></a>
                <a href="http://localhost/lab%20course%201/E-porosia/src/kategories/dekor.php"><span className="home-text40">Dekor</span></a>
                <a href="http://localhost/lab%20course%201/E-porosia/src/kategories/banjo.php"><span className="home-text41">Banjo</span></a>
                <a href="http://localhost/lab%20course%201/E-porosia/src/kategories/pune.php"><span className="home-text42">Pune</span></a>
                <a href="http://localhost/lab%20course%201/E-porosia/src/kategories/gjum.php"><span className="home-text43">Gjume</span></a>
                <a href="http://localhost/lab%20course%201/E-porosia/src/kategories/kuzhine.php"><span className="home-text44">Kuzhine</span></a>
              </div>
              <div className="home-container12">
                <span id="footer-kat" className="home-text51">
                  Resurset
                </span>
                {/* create API to connect to PHP */}
                <a href="http://localhost/lab%20course%201/E-porosia/src/information/kontakti.php"><span className="home-text52">Kontakto</span></a>
                <a href="http://localhost/lab%20course%201/E-porosia/src/information/aboutus.html"><span className="home-text53">Rreth nesh</span></a>
                <span className="home-text54">Tjera</span>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
  );
};

export default Home;
