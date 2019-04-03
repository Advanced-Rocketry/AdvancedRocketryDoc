<?php
    /*  HOW TO USE THIS TEMPLATE
        If you are unsure how to use this, please see any of the other pages for a reference. 

        Descriptions can include any HTML tags. Please link to other pages when you reference a block or item the first time. 

        <a href="Cables.php">data pipes</a>

        Please follow these naming conventions when submitting images for blocks:
            
            PAGE IMAGE = nameOfBlock_demo.png
            SIDE BAR IMAGE = nameOfBlock_block.png
            ICON IMAGE FOR LIST PAGE = nameOfBlock_icon.png
        
        Place images in the img folder. Be sure to update blocks/index.html with a link to your block page.
    
    */    
    
    //NAME OF BLOCK
    $title = 'Cables (Depracated)';

    $imageDemoName = 'energyCable_demo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The energy cable provides a way to connect energy generators to energy consuming devices.</p>
    <p>The energy cable will automatically draw up to 1000 power per second from and Forge power compatible blocks and transfer the power to any Forge Compatible reciever block.</p>
    <p>Note: the 1.7.10 version requires a redstone signal on the energy source pipe and only works with RF capable blocks</p>
    <hr><h2>Data Cable</h2>
    <p>The data cable provides a way to transfer data between machines without requiring the data chip.</p>
    <p>The Data cable will pull 1 data/tick from a data source.  Data will only be pulled if the pipe is powered by redstone</p>
    <p>In addition, when pulling from the Satellite terminal will automatically pull directly from the satellite.</p>
    <hr><h2>Liquid Pipe</h2>
    <p>The liquid pipe can transmit liquid from a tank to any other tank at a 100 milibuckets/tick.  Like the other two pipes, the source pipe must be powered to pull liquid.</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI ='';
    
    $optionalSection = '<br><h2>Depracation notice and motivation</h2><br>
    <h3>Buggy and Broken</h3>
    <p>As you may be aware, all of the Cables in Advanced Rocketry were marked as Depracated and the recipes removed in 1.3.x.  There\'s several reasons for this.  First, the pipes were only added during the port from 1.7 to 1.10 as a stopgap measure due to the fact many logisitics mods had not yet updated at the time.  
    Because it was a stopgap measure, the design and implementation was not very well
    thought out and was rather rushed.  Because of the design being rushed, a LOT of small annoying bugs existed with the system.  Pipes needing to be replaced periodically, random crashing, etc.  In order to once and for all fix all of these issues, the system would need to be significantly reworked.  The majority of the issues came from handling chunk loading and unloading.</p>
    <h3>Not a Logisitics mod</h3>
    <p>The second issue is that Advanced Rocketry, despite having a number of machines, is not really a logistics or machine mod, advanced rockety\'s primary focus is space travel.  there are many other mods out there dedicated to handling fluid flow and item flow.  Because I\'m one guy trying to balance a job, life, a minecraft mod, and a game engine to host future projects ( think advanced rocketry with actually round planets and being able to actually fly in space without loading screens ), I don\'t have time to focus on an "everything" mod.</p>
    <p>Since I know no other mods handle data, the <a href="WirelessTransciever.php">Wireless Transciever</a> was added to prevent loss of functionality.  While it is true the same can be done for fluids and items, I feel like that\'d go against the quasi-realistic, semi-near-term future that AR is meant to represent.</p>
    <h3>In Conclusion</h3>
    <p><bold>TL;DR:</bold> The pipes were buggy, meant to fix the lack of logisitics mods when 1.10 came out, and would be very time consuming for me to fix, and I have very limited time.  I think it better to have something that works all the time and is more limited, than something that works some of the time but has more options.</p>
    <p>Thank you all for understanding and for all the support on this project.</p>';
    
    $sidebarImage = 'energyCable_block.pn';
    $hardness = '3';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'NO';
    $sealable = 'NO';
    $tileEntity = 'YES';
    $multiBlock = '';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?>