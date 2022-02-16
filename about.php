<?php require 'header.php'; ?>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="CSS/about.css" />
  <script src="JS/map.js" defer></script>
  <script type="text/javascript" language="javascript" src="http://www.streetdirectory.com/js/map_api/m.php"></script>
</head>

<body onload="initialize()">
  <div class="vision">
    <div class="vision-txt">
      <p>Our Vision:</p>
      <span>To make homes feel <span class="vision-green">HYGGE</span> and <span class="vision-green">GUILT-FREE!</span></span>
      <p>Our motto:</p>
      <span>We don't <span class="vision-green">sleep</span> on furniture.</span>
    </div>
  </div>
  <div class="grid-layout">
    <div class="button">
      <div class="button-container">
        <a href="#contact"><input class="contact" type="button" value="CONTACT US"></a>
        <a href="#locate"><input class="locate" type="button" value="LOCATE US"></a>
        <a href="#product"><input class="product" type="button" value="PRODUCT CARE"></a>
      </div>
    </div>
    <div class="about">
      <p class="abt-intro">What does HYGGE mean? It means 'cozy' in Danish. We just want to make
        home feel like, well, home. We want homes to feel spacious and
        comfortable after a long day of work or fun. We want to save the
        environment while doing so. Got a old furniture you want to sell? Bring
        it in! We'll give your pre-owned furniture a new life and put it up for
        auction to let it give love and comfort to its new owner!</p><br><br>
      <div id="contact" class="link-btn"></div>
      <span class="abt-head">Contact us!</span><br>
      <span>Your email address and contact number will not be published.</span>
      <form>
        <br>
        <label class="abt-label" for="name">Name</label><br><br>
        <input type="text" id="name" name="name">
        <br><br>
        <label class="abt-label" for="contact">Contact No.</label><br><br>
        <input type="tel" id="contact" name="contact">
        <br><br>
        <label class="abt-label" for="email">Email</label><br><br>
        <input type="email" id="email" name="email">
        <br><br>
        <label class="abt-label" for="message">Message</label><br><br>
        <textarea id="message" name="message" row="6" cols="50"></textarea><br><br>
        <input type="submit" id="submit" name="submit">
      </form>
      <br>
      <div id="locate" class="link-btn"></div>
      <span class="abt-head">Locate Us!</span><br>
      <div class="map">
        <div id="map_canvas" style="width:800px; height: 400px"></div>
      </div>
      <div id="product" class="link-btn"></div>
      <span class="abt-head">Product Care</span>
      <p class="abt-para">Note:<br>
        Please be aware of safety hazards in the home. For your safety and to ensure the durability of your furniture,
        we
        recommend that you read and follow the instructions and/or recommendations contained in this product care
        manual.
        Always exercise caution and discretion around furniture. HYGGE will not be liable for any damage to your
        furniture
        and/or home fixtures and/or any other direct, indirect, special, incidental or consequential injury, loss or
        damage whatsoever arising from use of furniture in any manner that is inconsistent with the instructions
        contained
        in
        this product care manual.<br><br>

        WOOD AND VENEER<br>
        Wood and veneer are affected by light. For the first 6-8 weeks, when the item is first absorbing the surrounding
        light,
        keep the surfaces clear of any objects to avoid permanent marks and circles. At first, new furniture will also
        need time to
        absorb light before it will match the tone of your existing furniture
        <br>
        Water is only to be used in small doses and only in the form of a damp cloth. After wiping, always use a dry
        cloth
        <br>
        Wood and veneer are very sensitive to liquids. Wipe up spilled liquids immediately
        <br><br>
        MARBLE<br>
        Marble is a porous material with an open surface that needs protection, and any spilled liquids should be wiped
        off
        immediately to avoid stains.
        <br>
        Before delivery we give it a protective layer of silicone wax which reduces the risk of liquids penetrating the
        marble.
        However, oily liquids will penetrate the surface more rapidly than water based liquids. Since the marble is
        influenced
        by heat and might, in the worst case, crack, you need to protect the surface by using coasters.
        <br>
        General care instructions for marble:
        <br>
        spilled liquids should be removed immediately using a clean, neutrally coloured cloth wrung in lukewarm water
        <br>
        if a more thorough cleaning is required, only a pH-neutral soap, e.g. soap flakes, may be used. Any acid or
        alkaline
        product will degrade the surface
        <br>
        use coasters underneath drinks and hot objects to protect the surface
        <br><br>
        OUTDOOR FURNITURE<br>
        Wooden parts should be treated with oil before use and subsequently 3-4 times a year (6 times a year in dry
        weather).
        Only use oil suitable for outdoor furniture and make sure to follow the instructions given on the specific
        product.
        <br>
        Laminate parts and polyethylene wicker parts should be cleaned with a clean, damp cloth added a bit of
        detergent.
        Don't use cleaning products that will scratch or corrode the surface.
        <br>
        Durasint is a hot melt powder coat that provides effective protection against damage and surface corrosion. This
        makes
        it ideal for outdoor furniture.
        <br>
        Hot objects such as pots, pans and tea lights must never be placed directly on table tops.
        <br>
        Outdoor furniture is ideal for outdoor use, but during long periods of bad weather we recommend to shelter or
        cover it.
        <br><br>
        UPHOLSTERY IN GENERAL<br>
        if possible, switch the seat and back cushions on a regular basis to extend the life of your cushions and to
        ensure even
        wear over the years
        <br>
        cushions with a filling of foam/feathers or fibre should be shaken regularly to ensure form stability
        <br>
        make sure the legs are fitted tightly to the sofa and check them on a regular basis
        <br><br>
        FURNITURE TEXTILES<br>
        protect fabric from direct sunlight to prevent colour fading
        <br>
        ordinary cleaning: Vacuum frequently and use the HYGGE Textile Cleaner for general cleaning
        <br>
        treat your fabrics with the HYGGE Textile Protection to prevent stains and dirt from penetrating the textile
        fibres before use.
        When the fabric needs to be cleaned, vacuum your furniture and apply the HYGGE Textile Cleaner followed by HYGGE
        Textile
        Protection to maintain the fabric
        <br><br>
        LEATHER<br>
        protect leather from direct sunlight and sources of heat to prevent colour fading
        <br>
        for general cleaning only use a dry soft cloth
        <br>
        if necessary, wipe or lightly rub the whole surface with a clean, soft cloth wrung in soapy water
        <br>
        if vacuum cleaning, use a soft brush nozzle to avoid scratching the surface
        <br>
        we recommend using HYGGE Leather Cleaner for cleaning the sofa/chair 2–3 times a year
        <br>
        we recommend using HYGGE Leather Protector before you start using your new piece of furniture and also after use
        of
        HYGGE Leather Cleaner
      </p>
    </div>
  </div>
  <?php require 'footer.php'; ?>
</body>

</html>