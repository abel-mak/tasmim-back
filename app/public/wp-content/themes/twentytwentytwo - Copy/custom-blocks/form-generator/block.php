<?php
if (have_rows('text_input')):
  while (have_rows('text_input')):
    the_row();

    // Load sub field value.
    $placeholder = get_sub_field('placeholder');
    $type = get_sub_field('type');
    $options = trim(get_sub_field('options'));
    $options_array = (!empty($options)) ? explode(';', $options) : array();
    ?>
            <?php if ($type == 'simple') { ?>
                <input type="text" placeholder="<?php echo $placeholder ?>">
            <?php } else if ($type == 'textarea') { ?>
                  <textarea placeholder="<?php echo $placeholder ?>"></textarea>
            <?php } else if (count($options_array) > 0) { ?>
                  <input placeholder="<?php echo $placeholder ?>" id="dropdown-input" readonly></input>
                  <div class="dropdown dropdown-hide" id="dropdown-content">
                  <?php foreach ($options_array as $key => $value) { ?>
                      <div class="dropdown-option" onclick="selectOption(<?php echo $key ?>)" data-key="<?php echo $key ?>">
                        <?php echo $value ?>
                      </div>
                    <?php } ?> 
                    </div>
            <?php } ?>
          <?php
    // Do something, but make sure you escape the value if outputting directly...

    // End loop.
  endwhile;
endif;
?>

<style>
  .dropdown-option {
    border-top: 1px solid;
    border-left: 1px solid;
    border-right: 1px solid;
  }
  .dropdown-hide {
    opacity: 0;
  }
  .dropdown {
    font-size: 14px;
    background: white;
    position: absolute;
  }
  .dropdown-option {
    cursor: pointer;
  }
  .show {opacity: 1;}
</style>

<script>
  function toggleDropdown(event) {
    const dropdown = document.querySelector('#dropdown-content');
    dropdown.classList.remove('dropdown-hide');
  }

  function hideDropdown(event) {
    const dropdown = document.querySelector('#dropdown-content');
    dropdown.classList.add('dropdown-hide')
  }

  function selectOption(key) {
    const option = document.querySelector(`div[data-key="${key}"]`);
    document.querySelector("#dropdown-input").value = option.innerText
  }
  document.querySelector("#dropdown-input")
    .addEventListener("focus", toggleDropdown);
  document.querySelector("#dropdown-input")
    .addEventListener("blur", hideDropdown) 
</script>