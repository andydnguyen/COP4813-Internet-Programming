function isNumber(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}

function getNumbers(str) {
  str = str.replace(" ", "");
  var pieces = str.split(",");
  var nums = [];

  for(i = 0; i < pieces.length; i++) {
    if(isNumber(pieces[i])) {
      nums.push(pieces[i]/1);
    }
  }

  nums.sort();
  return nums;
}

function getCount(nums) {
  return nums.length;
}

function getSum(nums) {
  var sum = 0;
  for(i = 0; i < nums.length; i++) {
    sum += nums[i];
  }
  return sum;
}

function getMean(nums) {
  return getSum(nums) / getCount(nums);
}

function getMode(nums)
{
  var mode = {};
  var max = nums[0], maxCount = 1;
  for (i = 0; i<nums.length; i++)
  {
    var y = nums[i];
    if (mode[y] == null)
      mode[y] = 1;
    else
      mode[y]++;
    if(mode[y] > maxCount)
    {
      max = parseFloat(y).toFixed(2);
      maxCount = mode[y];
    }
     else if (mode[y] == maxCount)
        {
            max = "no mode found";
        }
  }
  return max;
}

function getMedian(nums) {
  nums.sort(function (a, b) { return a - b; });
  var mid = Math.floor(nums.length / 2);
  var med = 0;
          if (nums.length % 2) {
              med = nums[mid];
  return med;
          }
          else {
              med = (nums[mid - 1] + nums[mid]) / 2.0;
  return med;
          }
      }

function getVariance(nums) {
  var mean = getMean(nums);
  var diffs = [];

  for(i = 0; i < nums.length; i++) {
    diffs.push((nums[i] - mean)*(nums[i] - mean));
  }

  return getSum(diffs) / (getCount(diffs) - 1);
}

function getStandardDeviation(nums) {
  var variance = getVariance(nums);
  return Math.sqrt(variance);
}