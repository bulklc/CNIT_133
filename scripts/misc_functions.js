function thsnd_sep(num)
  {
    var num_parts = num.toString().split(".");
    num_parts[0] = num_parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return num_parts.join(".");
  }

function frmt_crrncy_usd(num)
  {
    return "$" + thsnd_sep(num)
  }

function frmt_accntg_usd(num, ssize)
  {
    var number_str = thsnd_sep(num);
    var fill_space = Number(ssize) - Number(number_str.length) + 1;
    return "$" + Array(fill_space).join(" ") + number_str
  }

