<?php
$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat dolores recusandae debitis aliquid voluptates eaque temporibus quod amet dignissimos tenetur obcaecati quidem quam ipsum at, totam alias id sapiente numquam.
Labore mollitia nulla eos iusto expedita harum, pariatur voluptatem dolorum, saepe illum delectus ex explicabo voluptatum, itaque iste voluptate excepturi blanditiis! Hic possimus odio nihil? Ullam minima dicta nemo delectus?
Eos id aliquam a aperiam, reprehenderit fugit mollitia enim iure iste expedita laborum eius sunt cumque laboriosam non itaque cum consectetur in tempora corporis? Veritatis sequi quod perferendis quas? Provident.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "<br>";
echo "<p>" . strtolower($loremIpsum) . "<br>";
?>