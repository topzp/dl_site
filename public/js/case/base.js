$('#myModal').on('show.bs.modal', function (e) {
  $('#nav').addClass("pd15")
})
$('#myModal').on('hidden.bs.modal', function (e) {
  $('#nav').removeClass("pd15")
})


function PageBase() {
  this.navId = "",
  this.$document = $(document),
  this.$nav = $("#nav"),
  this.$navFooter = $("#navFooter"),
  this.$navFooterSpace = $("#navFooterSpace"),
  this.$aboutUs = $("#aboutUs"),
  this.$aboutUsItem = $("#aboutUs .more-item"),
  this.$product = $("#product"),
  this.$xecloud = $("#xecloud"),
  this.init(),
  this.setActivity()
}
$(function () {
  new PageBase
}),
PageBase.prototype = {
  setActivity: function () {
    var t = "active" + (new Date).getDate();
    localStorage.getItem(t) || ($(".activity-time-body").addClass("activity-body"),
      $("#activity-close").click(function (e) {
        localStorage.setItem(t, "true"),
          $("body").removeClass("activity-body")
      }))
  },
  bindWindowScroll: function () {
    var e = this;
    e.$nav.hasClass("blueNav") && $(window).bind("scroll", function () {
      70 < e.$document.scrollTop() ? (e.$nav.removeClass("blueNav").addClass("whiteNav"),
        e.$navFooter.addClass("nav-white")) : (e.$nav.removeClass("whiteNav").addClass("blueNav"),
          e.$navFooter.removeClass("nav-white"))
    })
  },
  getCookie: function (e) {
    for (var t = document.cookie.split("; "), a = 0, o = t.length; a < o; a++) {
      var i = t[a].split("=");
      if (i[0] == e)
        return decodeURIComponent(i[1])
    }
    return ""
  },
  clickCount: function () {
    $("body").click(function (e) {
      var t = $(e.target)
        , a = t.data("count") || t.parent().data("count");
      if (a) {
        var o = a.split("_");
        _hmt.push(["_trackEvent", o[0] || "", o[1] || "", o[2] || ""])
      }
    })
  },
  getPathName: function () {
    return window.location.pathname
  },
  getUrlParam: function (name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");//构造一个含有目标参数的正则表达式对象
    var r = window.location.search.substr(1).match(reg);//匹配目标参数
    if (r != null) return unescape(r[2]); 
    return null;//返回参数值
  },
  navHighLight: function () {
    var e = "";
    console.log(this.getPathName())
    switch (this.getPathName()) {
      case "/":
        e = "#navRoot";
        break;
      case "/pages/aboutUs/":
        e = "#us";
        break;
      case "/pages/customize/":
        e = "#customize";
        break;
      case "/pages/onLine/":
      case "/pages/weChat/":
      case "/pages/website/":
        e = "#marketing";
        break;
      case "/pages/hotNews/news1/":
      case "/pages/hotNews/news2/":
      case "/pages/hotNews/news3/":
      case "/pages/hotNews/news4/":
        e = "#us";
        break;
      case "/clientCases":
        e = "#clientCases";
        break;
      default:
        e = "#product"
    }
    $(e).addClass("nav-item_select")
  },
  highlightCategory: function () {
    var id = this.getUrlParam('categoryId')
    $('#category_'+id).addClass("active")
    $('#category_'+id).addClass("selected")
  },
  handleCustomerService: function () {
    var e = document.getElementById("sidebar_box")
      , t = window.localStorage.getItem("customerFeedbackShow")
      , a = this.getTodayDate();
    console.log("todayDate = " + a),
      t != a && (window.localStorage.setItem("customerFeedbackShow", a),
        setTimeout(function () {
          e.style.display = "block"
        }, 1e3),
        setTimeout(function () {
          e.removeAttribute("style")
        }, 4e3))
  },
  getTodayDate: function () {
    var e = new Date
      , t = e.getFullYear()
      , a = e.getMonth() + 1
      , o = e.getDate();
    return t + "-" + (a = 9 < a ? a : "0" + a) + "-" + (o = 9 < o ? o : "0" + o)
  },
  init: function () {
      this.bindWindowScroll(),
      this.clickCount(),
      this.navHighLight(),
      this.highlightCategory(),
      this.handleCustomerService()
  }
};
