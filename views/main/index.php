<!DOCTYPE html>

<?php include_once  'views/partials/main/head.php' ?>


<body>
  <?php include_once  'views/partials/main/modal.php' ?>

  <div class="main-section">
    <div class="nav-content">
      <?php include_once 'views/partials/main/navbar.php' ?>

    </div>
    <section class="tuts">
      <!-- title -->
      <div class="title">
        <h2>Tutorials[Introduction To Data Communication]</h2>
      </div>
      <!-- questions -->
      <div class="section-center">
        <!-- single question -->
        <article class="tutorial">
          <!-- question title -->
          <div class="tut-title">
            <p>Concept of Communication</p>
            <button type="button" class="tut-btn">
              <span class="plus-icon">
                <i class="far fa-plus-square"></i>
              </span>
              <span class="minus-icon">
                <i class="far fa-minus-square"></i>
              </span>
            </button>
          </div>
          <!-- question text -->
          <div class="tut-txt">
            <p>
              The term “Data Communication” comprises two
              words: Data and Communication. Data can be
              any text, image, audio, video, and multimedia
              files. Communication is an act of sending or
              receiving data. Thus, data communication refers
              to the exchange of data between two or more
              networked or connected devices. These devices
              must be capable of sending and receiving data
              over a communication medium. Examples of
              such devices include_once personal computers, mobile
              phones, laptops, etc. Data communications is the process of transferring digital information between
              two or more points. Information is defined as the knowledge or intelligence. Data
              communications can be summarized as the transmission, reception, and processing of
              digital information. For data communications to occur, the communicating devices must be
              part of a communication system made up of a combination of hardware (physical
              equipment) and software (programs). The effectiveness of a data communications system
              depends on four fundamental characteristics: delivery, accuracy, timeliness, and jitter.
            </p>
          </div>
        </article>
        <article class="tutorial">
          <!-- question title -->
          <div class="tut-title">
            <p>[UNIT-I] Data Comm. In Layered Networks</p>
            <button type="button" class="tut-btn">
              <span class="plus-icon">
                <i class="far fa-plus-square"></i>
              </span>
              <span class="minus-icon">
                <i class="far fa-minus-square"></i>
              </span>
            </button>
          </div>
          <!-- question text -->
          <div class="tut-txt">
            <p>
              To reduce the design complexity, most of the networks are organized as a series of
              layers or levels, each one build upon one below it. The basic idea of a layered architecture is
              to divide the design into small pieces. Each layer adds to the services provided by the lower
              layers in such a manner that the highest layer is provided a full set of services to manage
              communications and run the applications. The benefits of the layered models are
              modularity and clear interfaces, i.e. open architecture and comparability between the
              different providers' components. A basic principle is to ensure independence of layers by
              defining services provided by each layer to the next higher layer without defining how the
              services are to be performed. This permits changes in a layer without affecting other layers.
              The basic elements of a layered model are services, protocols and interfaces. A service is a
              set of actions that a layer offers to another (higher) layer. Protocol is a set of rules that a
              layer uses to exchange information with a peer entity. These rules concern both the
              contents and the order of the messages used. Between the layers service interfaces are
              defined. The messages from one layer to another are sent through those interfaces.
              In a n-layer architecture, layer n on one machine carries on conversation with the
              layer n on other machine. The rules and conventions used in this conversation are
              collectively known as the layer-n protocol. Basically, a protocol is an agreement between the
              communicating parties on how communication is to proceed. Five-layer architecture is
              shown below; the entities comprising the corresponding layers on different machines are
              called peers. In other words, it is the peers that communicate using protocols. In reality, no
              data is transferred from layer n on one machine to layer n of another machine. Instead,
              each layer passes data and control information to the layer immediately below it, until the
              lowest layer is reached. Below layer-1 is the physical layer through which actual
              communication occurs.

            </p>
          </div>
        </article>
        <article class="tutorial">
          <!-- question title -->
          <div class="tut-title">
            <p>[UNIT-I] Data Comm. Networks</p>
            <button type="button" class="tut-btn">
              <span class="plus-icon">
                <i class="far fa-plus-square"></i>
              </span>
              <span class="minus-icon">
                <i class="far fa-minus-square"></i>
              </span>
            </button>
          </div>
          <!-- question text -->
          <div class="tut-txt">
            <p>
              Any group of computers connected together can be called a data communications network,
              and the process of sharing resources between computers over a data communications
              network is called networking. The most important considerations of a data communications
              network are performance, transmission rate, reliability and security.
              Network Components, Functions, and Features
              The major components of a network are end stations, applications and a network that will
              support traffic between the end stations. Computer networks all share common devices,
              functions, and features, including servers, clients, transmission media, shared data, shared
              printers and other peripherals, hardware and software resources, network interface card
              (NIC), local operating system (LOS) and the network operating system (NOS).
              Servers: Servers are computers that hold shared files, programs and the network operating
              system. Servers provide access to network resources to all the users of the network and
              different kinds of servers are present. Examples include file servers, print servers, mail
              servers, communication servers etc.
              Clients: Clients are computers that access and use the network and shared network
              resources. Client computers are basically the customers (users) of the network, as they
              request and receive service from the servers.
              Shared Data: Shared data are data that file servers provide to clients, such as data files,
              printer access programs, and e-mail.
            </p>
          </div>
        </article>
        <article class="tutorial">
          <!-- question title -->
          <div class="tut-title">
            <p>[UNIT-II] Metallic Cable Transmission Media </p>
            <button type="button" class="tut-btn">
              <span class="plus-icon">
                <i class="far fa-plus-square"></i>
              </span>
              <span class="minus-icon">
                <i class="far fa-minus-square"></i>
              </span>
            </button>
          </div>
          <!-- question text -->
          <div class="tut-txt">
            <p>
              The transmission medium is the physical path between transmitter and receiver in a data
              transmission system. It is included in the physical layer of the OSI protocol hierarchy. The
              transmission medium is usually free space, metallic cable, or fiber-optic cable. The
              information is usually a signal that is the result of a conversion of data from another form.
              Transmission media can be generally categorized as either unguided or guided.
              Guided Transmission Media uses a "cabling" system (or some sort of conductor) that guides
              the data signals along a specific path. The data signals are bound by the "cabling" system.
              Guided Media is also known as Bound Media. The conductor directs the signal propagating
              down it. Only devices physically connected to the medium can receive signals propagating
              down a guided transmission.ing to guide them along a specific path. The data signals are not bound to a cabling
              media and as such are often called Unbound Media. Unguided transmission media are
              wireless systems. Signals propagating down an unguided transmission medium are available
              to anyone who has a device capable of receiving them.
              A physical facility is one that occupies space and has weight as opposed to wireless
              media such as earth’s atmosphere or a vacuum and includes metallic cables and optical
              cables. Metallic transmission lines includes open-wire, twin-lead, and twisted-pair copper
              wire as well as coaxial cable, and optical fibers include plastic- and glass-core fibers
              encapsulated in various kinds of cladding materials.
            </p>
          </div>
        </article>
        <article class="tutorial">
          <!-- question title -->
          <div class="tut-title">
            <p>[UNIT-II] Parallel-Conductor Transmission Lines
            </p>
            <button type="button" class="tut-btn">
              <span class="plus-icon">
                <i class="far fa-plus-square"></i>
              </span>
              <span class="minus-icon">
                <i class="far fa-minus-square"></i>
              </span>
            </button>
          </div>
          <!-- question text -->
          <div class="tut-txt">
            <p>
              Parallel-wire transmission lines are comprised of two or more metallic conductors separated
              by a nonconductive insulating material called a dielectric. Common dielectric materials
              include air, rubber, polyethylene, paper, mica, glass and Teflon. The most common parallelconductor transmission lines are open-wire, twin lead and twisted pair, including unshielded
              twisted pair (UTP) and shielded twisted pair (STP).
              Open-Wire Transmission Lines: These are two-wire parallel conductors, closely
              spaced and separated by air. Non conductive spacers are placed at periodic intervals not
              only for support but also to keep the distance between the conductors constant. Plenum Cable: Plenum cables are the electrical or telecommunication cables (or wires)
              which are installed in environmental air spaces in the interior of many commercial and
              residential buildings. It is common practice to route communication cables and the like for
              computers, data devices, and alarm systems through plenums in building constructions. If a
              fire occurs in a building which includes plenums or risers, the non-fire retardant plenum
              construction would enable the fire to spread very rapidly throughout the entire building.
              Typically plenum data cables have two or more pairs of insulated conductors in a common
              jacket. The insulation can be made of several types of flame retardant insulation. A plenum
              is defined as a compartment or chamber to which one or more air ducts are connected and
              which forms part of the air distribution system of the structure. Plenum cables have a
              plurality of twisted pair conductors surrounded by a jacket. The twisted pairs generally all
              have the same twist or substantially the same twist. A typical and widely used flame
              retardant insulation for conductors in data plenum cables is fluorinated ethylene-propylene.
              Category 5 plenum cable made of jacketed twisted pairs of insulated conductors has to
              satisfy a number of electrical requirements set by the EIA/TIA specification 568A.

            </p>
          </div>
        </article>
        <article class="tutorial">
          <!-- question title -->
          <div class="tut-title">
            <p>[UNIT-III] Wireless Communication Systems </p>
            <button type="button" class="tut-btn">
              <span class="plus-icon">
                <i class="far fa-plus-square"></i>
              </span>
              <span class="minus-icon">
                <i class="far fa-minus-square"></i>
              </span>
            </button>
          </div>
          <!-- question text -->
          <div class="tut-txt">
            <p>
              Electromagnetic Polarization, Rays and Wavefronts, Electromagnetic Radiation, Spherical
              Wavefront and the Inverse Square Law, wave Attenuation and Absorption, Optical Properties
              of Radio Waves, Terrestrial Propagation of Electromagnetic Waves, Skip Distance, FreeSpace Path Loss, Microwave Communications Systems, Satellite Communications Systems
              With wireless communication systems, electromagnetic signals are emitted from
              an antenna, propagate through the earth’s atmosphere (air) or free space (a vacuum), and
              are then received (captured) by another antenna. Sometimes, it is impractical to
              interconnect two pieces of equipment physically. So, free space or earth’s atmosphere is
              often used as the transmission medium. Free space propagation of electromagnetic waves is
              often called radio-frequency (RF) propagation or simply radio propagation. Wireless
              communications include terrestrial and satellite microwave radio systems, broadcast radio
              systems, two-way mobile radio and cellular telephone.

            </p>
          </div>
        </article>
        <article class="tutorial">
          <!-- question title -->
          <div class="tut-title">
            <p>[UNIT-III] Rays And Wavefronts </p>
            <button type="button" class="tut-btn">
              <span class="plus-icon">
                <i class="far fa-plus-square"></i>
              </span>
              <span class="minus-icon">
                <i class="far fa-minus-square"></i>
              </span>
            </button>
          </div>
          <!-- question text -->
          <div class="tut-txt">
            <p>
              Rays and wavefronts are used for analysing electromagnetic waves. A ray is a line
              drawn along the direction of propagation of an electromagnetic wave. Rays are used to
              show the relative direction of propagation.A wavefront shows a surface of constant phase of electromagnetic waves. A
              wavefront is formed when points of equal phase on rays propagating from the same source
              are joined together. The above figure shows a wavefront with a surface that is
              perpendicular to the direction of propagation (rectangle ABCD). When a surface is plane, its
              wavefront is perpendicular to the direction of propagation. A point source is a single
              location from which rays propagate equally in all directions (i.e. isotropic source). The
              wavefront generated from a point source is simply a sphere with radius R and its center
              located at the point of origin of the waves.The flow of electromagnetic waves (energy) in the direction of propagation is called
              electromagnetic radiation. The rate at which energy passes through a given surface area in
              free space is called power density, usually given in watts per square meter. Mathematically,
              Power density P = EH, where P is power density (watt/m2
              ), E represents rms electric field
              intensity (volts/meter) and H represents rms magnetic field intensity (ampere turns/meter).A spherical wavefront is obtained by an isotopic radiator. All points at distance
              R(radius) from the source lie on the surface of the sphere and have equal power densities.
              At an instance of time, the total power radiated Prad is uniformly distributed over the total
              surface of the sphere. Therefore, the power density at any point on the sphere is the total
              radiated power divided by the total area of the sphere and can be given as,
              P = Prad / (4πR2
              )

            </p>
          </div>
        </article>
        <article class="tutorial">
          <!-- question title -->
          <div class="tut-title">
            <p>[UNIT-IV] Microwave Communication Systems</p>
            <button type="button" class="tut-btn">
              <span class="plus-icon">
                <i class="far fa-plus-square"></i>
              </span>
              <span class="minus-icon">
                <i class="far fa-minus-square"></i>
              </span>
            </button>
          </div>
          <!-- question text -->
          <div class="tut-txt">
            <p>
              Microwaves are generally described as electromagnetic waves with frequencies that
              range from approximately 500 MHz to 300 GHz. Because of their high frequencies,
              microwaves have relatively short wavelengths. Microwave systems are used for carrying
              long-distance voice telephone service, metropolitan area networks, wide area networks and
              the Internet. There are different types of microwave systems operating over distances that
              vary from 15 miles to 4000 miles in length. Intrastate or feeder service microwave systems
              are generally classified as short haul because they are used to carry information for
              relatively short distances, such as between cities within the same state. Long-haul
              microwave systems are those used to carry information for relatively long-distances, such as interstate and backbone route applications. Microwave radio system capacities range from
              less than 12 voice grade telephone circuits to more than 22,000 voice and data channels.
            </p>
          </div>
        </article>
        <article class="tutorial">
          <!-- question title -->
          <div class="tut-title">
            <p>[UNIT-IV] Geosynchronous Satellite </p>
            <button type="button" class="tut-btn">
              <span class="plus-icon">
                <i class="far fa-plus-square"></i>
              </span>
              <span class="minus-icon">
                <i class="far fa-minus-square"></i>
              </span>
            </button>
          </div>
          <!-- question text -->
          <div class="tut-txt">
            <p>
              Also referred to as geostationary, it refers to the movement of communications
              satellites where the satellite circles the globe over the equator, in a movement that is
              synchronized with the earth's rotation. Because of this synchronization, the satellite appears
              to be stationary, and they also offer continuous operation in the area of visibility.
              Geosynchronous orbits are circular. There is only one geosynchronous earth orbit, which is
              occupied by a large number of satellites.
              Geosynchronous orbit requirements: The most important requirement is that the
              orbit must have a 0-degree angle of elevation. They also must orbit in the same direction as
              earth’s rotation with the same angular velocity. Using Kepler’s third law, it can be shown
              that geosynchronous satellites must revolve around earth in a circular pattern 42,164 km
              from the center of the earth. The circumference of a geosynchronous satellite orbit is
              C = 2 π (42,164km) = 264,790 km, and the velocity (v) is v = 264,790 km/24hr = 6840 mph
              Clarke orbit: Synonymous with geostationary orbit. It is so-named because noted author
              Arthur C. Clarke was the first person to realize that this orbit would be useful for
              communication satellites. The Clarke orbit meets the concise setoff specifications for
              geosynchronous satellite orbits: (1) be located directly above the equator, (2) travel in the
              same direction as earth’s rotation with a velocity of 6840 mph, (3) have an altitude of
              22,300 miles above earth and (4) complete one revolution in 24 hours

            </p>
          </div>
        </article>



    </section>
    <div class="row">
      <div class="col-md-12">
        <?php include_once  'views/partials/main/comment-section.php' ?>

      </div>
    </div>




    <?php include_once 'views/partials/main/footer.php' ?>
  </div>
</body>

</html>