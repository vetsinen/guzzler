<?php
header("Content-Type:text/xml");
?>
<bookstore>
    <book ISBN="10-000000-001">
        <title>The Iliad and The Odyssey</title>
        <price>12.95</price>
        <comments>
            <userComment rating="4"> Best translation I've read. </userComment>
            <userComment rating="2"> I like other versions better. </userComment>
        </comments>
    </book>
    <book ISBN="10-000000-999">
        <title>Anthology of World Literature</title>
        <price>24.95</price>
        <comments>
            <userComment rating="3"> Needs more modern literature. </userComment>
            <userComment rating="4"> Excellent overview of world literature. </userComment>
        </comments>
    </book>
    <book ISBN="11-000000-002">
        <title>Computer Dictionary</title>
        <price>24.95</price>
        <comments>
            <userComment rating="3"> A valuable resource. </userComment>
        </comments>
    </book>
    <book ISBN="11-000000-003">
        <title>Cooking on a Budget</title>
        <price>23.95</price>
        <comments>
            <userComment rating="4">Delicious!</userComment>
        </comments>
    </book>
    <book ISBN="11-000000-004">
        <title>Great Works of Art</title>
        <price>29.95</price>
    </book>
</bookstore>