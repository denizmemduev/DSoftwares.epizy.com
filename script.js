$(document).ready(function () {
  $("#lgnbtn").click(function () {
    $(".box2").css({
      display: "flex",
      justifyContent: "center",
      alignItems: "center",
      flexDirection: "column",
      flexWrap: "wrap",
    });

    $(".box").css({
      display: "none",
    });
  });

  $("#signbtn").click(function () {
    $(".box2").css({
      display: "none",
    });

    $(".box").css({
      display: "flex",
      justifyContent: "center",
      alignItems: "center",
      flexDirection: "column",
      flexWrap: "wrap",
    });
  });
});
