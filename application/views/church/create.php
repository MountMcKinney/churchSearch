<!-- Create review of a church -->
<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('church/create'); ?>
  <div class="createReview">
    <label for="review_title">Title:</label>
      <input type="text" name="review_title" /><br />
    <label for="church_name">Church Name:</label>
      <input type="text" name="church_name" /><br />
    <label for="state">State:</label>
      <select name="state">
        <!-- http://stackoverflow.com/questions/5189662/populate-a-drop-down-box-from-a-mysql-table-in-php -->
        <!-- populate from SQL state table -->
        <option value="AL">Alabama</option>
        <option value="AK">Alaska</option>
        <option value="AZ">Arizona</option>
        <option value="AR">Arkansas</option>
        <option value="CA">California</option>
        <option value="CO">Colorado</option>
        <option value="CT">Connecticut</option>
        <option value="DE">Delaware</option>
        <option value="FL">Florida</option>
        <option value="GA">Georgia</option>
        <option value="HI">Hawaii</option>
        <option value="ID">Idaho</option>
        <option value="IL">Illinois</option>
        <option value="IN">Indiana</option>
        <option value="IA">Iowa</option>
        <option value="KS">Kansas</option>
        <option value="KY">Kentucky</option>
        <option value="LA">Louisiana</option>
        <option value="ME">Maine</option>
        <option value="MD">Maryland</option>
        <option value="MA">Massachusetts</option>
        <option value="MI">Michigan</option>
        <option value="MN">Minnesota</option>
        <option value="MS">Mississippi</option>
        <option value="MO">Missouri</option>
        <option value="MT">Montana</option>
        <option value="NE">Nebraska</option>
        <option value="NV">Nevada</option>
        <option value="NH">New Hampshire</option>
        <option value="NJ">New Jersey</option>
        <option value="NM">New Mexico</option>
        <option value="NY">New York</option>
        <option value="NC">North Carolina</option>
        <option value="ND">North Dakota</option>
        <option value="OH">Ohio</option>
        <option value="OK">Oklahoma</option>
        <option value="OR">Oregon</option>
        <option value="PA">Pennsylvania</option>
        <option value="RI">Rhode Island</option>
        <option value="SC">South Carolina</option>
        <option value="SD">South Dakota</option>
        <option value="TN">Tennessee</option>
        <option value="TX">Texas</option>
        <option value="UT">Utah</option>
        <option value="VT">Vermont</option>
        <option value="VA">Virginia</option>
        <option value="WA">Washington</option>
        <option value="DC">Washington DC</option>
        <option value="WV">West Virginia</option>
        <option value="WI">Wisconsin</option>
        <option value="WY">Wyoming</option>
      </select>
    <label for="diocese">Diocese:</label>
      <select name="diocese">
        <!-- http://stackoverflow.com/questions/5189662/populate-a-drop-down-box-from-a-mysql-table-in-php -->
        <!-- populate from SQL diocese table for each state. FL is used as an example here -->
        <!-- Make this not available until after you choose a state -->
        <option value="fl_miami">Archdiocese of Miami</option>
        <option value="fl_orlando">Diocese of Orlando</option>
        <option value="fl_pens_talla">Diocese of Pensacola-Tallahassee</option>
        <option value="fl_st_aug">Diocese of St. Augustine</option>
        <option value="fl_st_pete">Diocese of St. Petersburg</option>
        <option value="fl_west_palm">Diocese of West Palm</option>
        <option value="fl_venice">Diocese of Venice</option>
      </select>
    <label for="review_text">Review:</label>
      <textarea rows="4" cols="20" name="review_text" id="reviewTextArea" placeholder="Your review goes here" required></textarea><br />
    <input type="submit" name="submit" value="Submit Review" />
  </div>
</form>
