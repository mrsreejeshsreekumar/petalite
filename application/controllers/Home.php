<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->helper(array('url'));

        $this->load->helper('url');



        $this->load->library('session');
    }
    public function index()
    {
        $data['flag'] = 'home';
        $this->load->view('header/headers');
        $this->load->view('templates/preloader');
        $this->load->view('templates/menubar', $data);
        $this->load->view('pages/home/banner');
        $this->load->view('pages/home/what-we-offer');
        // $this->load->view('pages/home/upcoming');
        $this->load->view('pages/home/specialities');
        $this->load->view('pages/home/parallax');
        $this->load->view('pages/home/about-petalites');
        $this->load->view('pages/home/clients');
        $this->load->view('footer/footer');
    }
    public function architects()
    {
        $data['flag']    = 'petalite';
        $data['segments']    = 'Petalite Architects';
        $this->load->view('header/headers');
        $this->load->view('templates/preloader');
        $this->load->view('header/additional-header', $data);
        $this->load->view('pages/architects/archi-banner', $data);
        $data['archi_pics']=$this->getArchitectsImages();
        $this->load->view('pages/architects/upcoming',$data);
        $this->load->view('footer/footer');
    }
    public function electrical()
    {
        $data['flag']    = 'petalite';
        $data['segments']    = 'Petalite Architects';
        $this->load->view('header/headers');
        $this->load->view('templates/preloader');
        $this->load->view('header/additional-header', $data);
        $this->load->view('pages/electricals/ele-banner', $data);
        $data['products']=$this->getShops(); 
        $this->load->view('pages/electricals/informations',$data);
        $this->load->view('footer/footer');
    }
    public function interior()
    {
        $data['flag']    = 'petalite';
        $data['segments']    = 'Petalite Architects';
        $this->load->view('header/headers');
        $this->load->view('templates/preloader');
        $this->load->view('header/additional-header', $data);
        $this->load->view('pages/interior/inti-banner', $data);

        $this->load->view('pages/interior/interior-info');
        $this->load->view('footer/footer');
    }
    public function projects()
    {
        $data['flag']    = 'petalite';
        $this->load->view('header/headers');
        $this->load->view('templates/preloader');
        $this->load->view('header/additional-header', $data);
        $res = $this->getFeatures();
        $data['features'] = $res;
        $this->load->view('pages/developers/develop-banner', $data);   
        $this->load->view('pages/developers/latest-from-developer');


        $this->load->view('pages/projects', $data);

        $this->load->view('footer/footer');
    }
    public function aboutPetalite()
    {
        $data['flag']    = 'about';
        $this->load->view('header/headers');
        $this->load->view('templates/preloader');
        $this->load->view('header/additional-header', $data);

        $this->load->view('pages/about-us');

        $this->load->view('footer/footer');
    }

    public function portfolio()
    {

        $data['flag']    = 'portfolio';
        $this->load->view('header/headers');
        $this->load->view('templates/preloader');
        $this->load->view('header/additional-header', $data);

        $this->load->view('pages/portfolio');

        $this->load->view('footer/footer');
    }
    public function serviceOffered()
    {
        $data['flag']    = 'service';
        $this->load->view('header/headers');
        $this->load->view('templates/preloader');
        $this->load->view('header/additional-header', $data);

        $this->load->view('pages/services');

        $this->load->view('footer/footer');
    }
    public function testimonials()
    {
        $data['flag']    = 'testimonials';
        $this->load->view('header/headers');
        $this->load->view('templates/preloader');
        $this->load->view('header/additional-header', $data);

        $this->load->view('pages/testimonials');

        $this->load->view('footer/footer');
    }
   
    public function contactUs()
    {
        $data['flag']    = 'contact';
        $this->load->view('header/headers');
        $this->load->view('templates/preloader');
        $this->load->view('header/additional-header', $data);

        $this->load->view('pages/contact-us');

        $this->load->view('footer/footer');
    }
    public function getFeatures()
    {
        $json_string = '[
            {
                "id": 1,
                "tittle": "Type-A",
                "rate": "1230",
                "Features": [
                    "Foundation & Basement, Random Rubble Masonry",
                    "Super Structure - Solid Block Work",
                    "Lintel would be placed on the entire wall (Lintel at 2.1m)",
                    "SANKAR, RAMCO, good quality ISI brand"
                ]
            },
            {
                "id": 2,
                "tittle": "Type-B",
                "rate": "1700",
                "Features": [
                    "Foundation & Basement, Random Rubble Masonry",
                    "Super Structure - Solid Block Work",
                    "Lintel would be placed on the entire wall (Lintel at 2.1m)",
                    "SANKAR, RAMCO, good quality ISI brand"
                ]
            },
            {
                "id": 3,
                "tittle": "Type C",
                "rate": "1900",
                "Features": [
                    "Foundation & Basement, Random Rubble Masonry",
                    "Super Structure - Solid Block Work",
                    "Wash Basin - Bath Room",
                    "End to End Work Complete with ISO quality Products",
                    "Modular Kitchen"
                ]
            }
        ]';
        $res = json_decode($json_string, true);
        return $res;
    }
    public function more()
    {
        $segment=$this->uri->segment(2);
        $data['flag']    = 'petalite';
        $this->load->view('header/headers');
        $this->load->view('templates/preloader');
        $this->load->view('header/additional-header', $data);         
        if($segment==='1'){
        $res = $this->getImages();
        $data['carousal'] = $res;
        $details = $this->basicDetails();
        $data['details'] = $details;
        }
        if($segment==='2'){
            $res = $this->standardImages();
            $data['carousal'] = $res;
            $details = $this->standardDetails();
            $data['details'] = $details;
        }
        if($segment==='3'){
            $res = $this->premiumImages();
            $data['carousal'] = $res;
            $details = $this->premiumDetails();
            $data['details'] = $details;
        }
        $this->load->view('pages/more', $data);
        $this->load->view('footer/footer');
    }
    public function latest_info()
    {
        $segment=$this->uri->segment(2);
        $data['flag']    = 'petalite';
        $this->load->view('header/headers');
        $this->load->view('templates/preloader');
        $this->load->view('header/additional-header', $data);         
        if($segment==='1'){
        $res = $this->getlatestImages();
        $data['carousal'] = $res;
        $details = $this->latestBasicDetails();
        $data['details'] = $details;
        }
        $this->load->view('pages/developers/latest-more', $data);
        $this->load->view('footer/footer');
    }
    public function getlatestImages()
    {

        $json_string = '[
            {"id":1,"parent":"' . base_url() . 'images/developers/latest/latest-1.jpg","child":"' . base_url() . 'images/developers/latest/latest-1.jpg"},
            {"id":2,"parent":"' . base_url() . 'images/developers/latest/latest-2.jpg","child":"' . base_url() . 'images/developers/latest/latest-2.jpg"},
            {"id":3,"parent":"' . base_url() . 'images/developers/latest/latest-3.jpg","child":"' . base_url() . 'images/developers/latest/latest-3.jpg"},
            {"id":4,"parent":"' . base_url() . 'images/developers/latest/latest-4.jpg","child":"' . base_url() . 'images/developers/latest/latest-4.jpg"},
            {"id":5,"parent":"' . base_url() . 'images/developers/latest/latest-5.jpg","child":"' . base_url() . 'images/developers/latest/latest-5.jpg"},
            {"id":6,"parent":"' . base_url() . 'images/developers/latest/latest-6.jpg","child":"' . base_url() . 'images/developers/latest/latest-6.jpg"}]';

        $res = json_decode($json_string, true);
        return $res;
    }

    public function latestBasicDetails()
    {
        $json_string = '{"Tittle":"New Project at Thrissur","sqft":"1000-2500 sqft","features":"It is located at Punnayurkulam,Thissur District, Kerala  (About 10KM away from Kunnamkulam / Guruvayur) Pin:679561","type":"Luxury","budget":"Luxury"}';
        $res = json_decode($json_string, true);
        return $res;
    }

    public function getImages()
    {

        $json_string = '[
            {"id":1,"parent":"' . base_url() . 'images/basic/parent/A.png","child":"' . base_url() . 'images/basic/parent/A.png"},
            {"id":2,"parent":"' . base_url() . 'images/basic/parent/B.png","child":"' . base_url() . 'images/basic/parent/B.png"},
            {"id":3,"parent":"' . base_url() . 'images/basic/parent/C.png","child":"' . base_url() . 'images/basic/parent/C.png"},
            {"id":4,"parent":"' . base_url() . 'images/basic/parent/D.png","child":"' . base_url() . 'images/basic/parent/D.png"},
            {"id":5,"parent":"' . base_url() . 'images/basic/parent/E.png","child":"' . base_url() . 'images/basic/parent/E.png"},
            {"id":6,"parent":"' . base_url() . 'images/basic/parent/F.png","child":"' . base_url() . 'images/basic/parent/F.png"}]';

        $res = json_decode($json_string, true);
        return $res;
    }
    public function basicDetails()
    {
        $json_string = '{"Tittle":"Basic","sqft":1230,"features":"One of the most important aspects of any villa is its general design, in terms of architecture, landscaping, interior design, etc. All these elements combine to create the general atmosphere. The best modern villas are truly a sight to behold, with a unique character that expresses itself in the overall aesthetics of the structure, its surroundings and the interior","type":"Villa","budget":"Budget-Friendly"}';
        $res = json_decode($json_string, true);
        return $res;
    }
    public function standardDetails()
    {
        $json_string = '{"Tittle":"Standard","sqft":1700,"features":"It is proven by various medical studies that living in large cities increases the level of stress and thereby decreases the quality of life and health. For this type of cases, the best cure is a quiet place where you can rest. Therefore, our villas are the perfect escape for the problems of the city. The tranquility of a modern villa will improve your life quality, since the majority of the villas are a closed community, you will have a much quieter private life.","type":"Economy Villa","budget":"Budget-Friendly"}';
        $res = json_decode($json_string, true);
        return $res;
    }
    public function standardImages()
    {

        $json_string = '[
            {"id":1,"parent":"' . base_url() . 'images/economy/A.png","child":"' . base_url() . 'images/economy/A.png"},
            {"id":2,"parent":"' . base_url() . 'images/economy/B.png","child":"' . base_url() . 'images/economy/B.png"},
            {"id":3,"parent":"' . base_url() . 'images/economy/C.png","child":"' . base_url() . 'images/economy/C.png"}]';

        $res = json_decode($json_string, true);
        return $res;
    }
    public function premiumDetails()
    {
        $json_string = '{"Tittle":"Premium","sqft":1900,"features":"The designer villas have  spacious living room, an elegantly furnished dining room, a fully equipped, state-of-the-art kitchen. The rooms are designed and furnished with meticulous attention to the smallest details and a dedication to good taste. They are equipped with all the comforts and luxury expected of modern life, such as entertainment.","type":"Premium Villa","budget":"Budget-Friendly"}';
        $res = json_decode($json_string, true);
        return $res;
    }
    public function premiumImages()
    {

        $json_string = '[
            {"id":1,"parent":"' . base_url() . 'images/premium/A.png","child":"' . base_url() . 'images/premium/A.png"},
            {"id":2,"parent":"' . base_url() . 'images/premium/B.png","child":"' . base_url() . 'images/premium/B.png"},
            {"id":3,"parent":"' . base_url() . 'images/premium/C.png","child":"' . base_url() . 'images/premium/C.png"},
            {"id":2,"parent":"' . base_url() . 'images/premium/D.png","child":"' . base_url() . 'images/premium/D.png"},
            {"id":2,"parent":"' . base_url() . 'images/premium/E.png","child":"' . base_url() . 'images/premium/E.png"},
            {"id":2,"parent":"' . base_url() . 'images/premium/F.png","child":"' . base_url() . 'images/premium/F.png"},
            {"id":2,"parent":"' . base_url() . 'images/premium/G.png","child":"' . base_url() . 'images/premium/G.png"},
            {"id":2,"parent":"' . base_url() . 'images/premium/H.png","child":"' . base_url() . 'images/premium/H.png"},
            {"id":2,"parent":"' . base_url() . 'images/premium/I.png","child":"' . base_url() . 'images/premium/I.png"}
            ]';

        $res = json_decode($json_string, true);
        return $res;
    }
    public function getShops()
    {

        $json_string = '[
            {
                "id": 1,
                "img": "' . base_url() . 'images/shop/LED-BULB.jpg",
                "title":"LED Buld",
                "feature":"In Stock",
                "price":"Retail Price"
            },
            {
                "id": 2,
                "img": "' . base_url() . 'images/shop/luker-fan.jpg",
                "title":"Fan",
                "feature":"In Stock",
                "price":"Retail Price"
            },
            {
                "id": 3,
                "img": "' . base_url() . 'images/shop/Luker-LED-Slim-panel.jpg",
                "title":"LED Slim panel",
                "feature":"In Stock",
                "price":"Retail Price"
            },
            {
                "id": 4,
                "img": "' . base_url() . 'images/shop/luker-premium.jpg",
                "title":"LED Premium",
                "feature":"In Stock",
                "price":"Retail Price"
            },
            {
                "id": 5,
                "img": "' . base_url() . 'images/shop/solar-cells.jpg",
                "title":"Solar Cells",
                "feature":"In Stock",
                "price":"Retail Price"
            },
            {
                "id": 5,
                "img": "' . base_url() . 'images/shop/water-heater.png",
                "title":"Water heater",
                "feature":"In Stock",
                "price":"Retail Price"
            }
           
           
        ]';

        $res = json_decode($json_string, true);
        return $res;
    }

    public function getArchitectsImages(){      
    
            $json_string = '[
                {
                    "id": 1,
                    "title": "Proposed Residence at Althara, Thrissur for Mr Ajmal",
                    "thumb": "' . base_url() . 'images/architects/products/1.jpg"
                },
                {
                    "id": 2,
                    "title": "Proposed Residence at Kappliyangad, Thrissur",
                    "thumb": "' . base_url() . 'images/architects/products/2.jpg"
                },
                {
                    "id": 3,
                    "title": "Proposed Residence at Kunnathur, Thrissur",
                    "thumb": "' . base_url() . 'images/architects/products/3.jpg"
                },
                {
                    "id": 4,
                    "title": "Proposed Residence at Kunnathur, Thrissur",
                    "thumb": "' . base_url() . 'images/architects/products/4.jpg"
                },
                {
                    "id": 5,
                    "title": "Proposed Residence at Chenthrapinni, Kodungallur for Mr Joby",
                    "thumb": "' . base_url() . 'images/architects/products/5.jpg"
                },
                {
                    "id": 6,
                    "title": "Proposed Residence at Chenthrapinni, Kodungallur for Mr Joby",
                     "thumb": "' . base_url() . 'images/architects/products/6.jpg"
                },
                {
                    "id": 7,
                    "title": "Proposed Residence at Engandiyur for Mr Manoj",
                    "thumb": "' . base_url() . 'images/architects/products/7.jpg"
                },
                {
                    "id": 8,
                    "title": "Owned by Mr Fazlu",
                    "thumb": "' . base_url() . 'images/architects/products/8.jpg"
                },
                {
                    "id": 9,
                    "title": "Owned By Mr Manoj",
                    "thumb": "' . base_url() . 'images/architects/products/9.jpg"
                },
                {
                    "id": 10,
                    "title": "Proposed Residence at Vadakkekad for Mr Saneesh",
                    "thumb": "' . base_url() . 'images/architects/products/10.jpg"
                },
                {
                    "id": 11,
                    "title": "Proposed Residence at Althara, Thrissur for the cllient Mr Subhash",
                    "thumb": "' . base_url() . 'images/architects/products/11.jpg"
                },
                {
                    "id": 12,
                    "title": "Proposed Residence at Kunnathur, Thrissur for the client Mr Sujeesh",
                    "thumb": "' . base_url() . 'images/architects/products/12.jpg"
                },
                {
                    "id": 1,
                    "title": "Proposed Residence at Althara for Mr Maruti Vilas Suryawanshi",
                    "thumb": "' . base_url() . 'images/architects/products/13.jpg"
                },
                {
                    "id": 14,
                    "title": "Proposed Residence at Kunnathur, Thrissur for the client Mr Vasudevan",
                    "thumb": "' . base_url() . 'images/architects/products/14.jpg"
                },
                {
                    "id": 15,
                    "title": "Architect design by Petalite Architects For Mr. Yoonas",
                    "thumb": "' . base_url() . 'images/architects/products/15.jpg"
                },
                {
                    "id": 16,
                    "title": "Proposed Residence at Punnayur, Thrissur for Mr Ali",
                    "thumb": "' . base_url() . 'images/architects/products/16.jpg"
                },
                {
                    "id": 17,
                    "title": "Proposed Residence at Althara, Thrissur for Mr Rineesh",
                    "thumb": "' . base_url() . 'images/architects/products/17.jpg"
                },
                {
                    "id": 18,
                    "title": "Proposed Educational Building for Mr Ramataja Memorial School",
                    "thumb": "' . base_url() . 'images/architects/products/18.jpg"
                },
                {
                    "id": 19,
                    "title": "Proposed Residence at Mannuthi, Thrissur for Mr Sajesh",
                    "thumb": "' . base_url() . 'images/architects/products/19.jpg"
                },
                {
                    "id": 20,
                    "title": "Proposed Residence at Mannuthi, Thrissur for Mr Sajesh",
                    "thumb": "' . base_url() . 'images/architects/products/20.jpg"
                },
                {
                    "id": 21,
                    "title": "Proposed Residence at Changaramkulam, Malappuram for Mr Santhosh K.S",
                    "thumb": "' . base_url() . 'images/architects/products/21.jpg"
                },
                {
                    "id": 22,
                    "title": "Proposed Residence at Changaramkulam, Malappuram for Mr Santhosh K.S",
                    "thumb": "' . base_url() . 'images/architects/products/22.jpg"
                }
                
            ]';
    
            $res = json_decode($json_string, true);
            return $res;
        
    }
}
