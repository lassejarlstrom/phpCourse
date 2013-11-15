<?php 
include 'header.html';
?>
    <h1>BUY STUFF.COM</h1>
    
    <form action="pdf.php">
        <table>
        <tr>
            <td><label for="drink">Item 1</label><br/></td>
            <td><label for="dAmount">Amount</label></td>
        </tr>
        <tr>
            <td>    <select name="drink">
                        <option value="Beer">Beer</option>
                        <option value="Coca Cola">Coca Cola</option>
                        <option value="Bottled water">Bottled water</option>
                    </select>
            </td>
            <td><input type="number" name="dAmount"/></td>
        </tr>
        <tr></t<r>
                <tr>
            <td><label for="bar">Item 2</label><br/></td>
            <td><label for="bAmount">Amount</label></td>
        </tr>
        <tr>
            <td>        <select name="bar">
                            <option value="Mars bar">Mars bar</option>
                            <option value="Twix bar">Twix bar</option>
                            <option value="Bounty bar">Bounty bar</option>
                        </select>
            </td>
            <td><input type="number" name="bAmount"/></td>
        </tr>
        </table>

        <br/>
        <br/>
        <hr/>
            <h2>Customer information</h2>
        <table>
            <tr>
                <td><label for="Name">Name:</label></td>
                <td><input name="Name"/></td>
            </tr>
            <tr>
                <td><label for="address">Address:</label></td>
                <td><input name="address"/></td>
            </tr>
            <tr>
                <td><label for="City">City:</label></td>
                <td><input name="City"/></td>
            </tr>
        </table>
            <input type="submit" value="order"/>
    </form>

<?php
include 'footer.html';
?>
