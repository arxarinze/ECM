
 var e = {success: function(){__('#content0').ajaxGetData("test.php")}};
  var g = {success: function(){__('#content0').ajaxGetData("insert0.php")}};
(function(){__('#test.php').tooltip('Search Button').load(20,'dtopCover', 5, e);
__('#insert0.php').tooltip('Search Button').load(20,'dtopCover', 5, g)
})();