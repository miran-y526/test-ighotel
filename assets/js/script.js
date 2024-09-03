(function ($) {

  var pcWindow = true;
  var spWindow = false;
  if ($(window).width() < 768) {
    pcWindow = false;
    spWindow = true;
  }

  // GA
  var heatUserId = getTMGcookie(); function getClickText(t) { var e = $(t.target).text().replace(/\s+/g, ""); return null == e || "" == e ? "undefined" : e.length > 100 ? e.substring(0, 100).toLowerCase() + "…" : e.toLowerCase() } function getClickLink(t) { var e = $(t.target).attr("href"); return null == e || "" == e ? "undefined" : encodeURIComponent(e) } function getRelativeX(t) { var e; e = null == t ? 0 : t.pageX; var n = document.body, o = document.documentElement; return (e / Math.max(n.scrollWidth, n.offsetWidth, o.clientWidth, o.scrollWidth, o.offsetWidth)).toFixed(3) } function getRelativeY(t) { var e; e = null == t ? 0 : t.pageY; var n = document.body, o = document.documentElement; return (e / Math.max(n.scrollHeight, n.offsetHeight, o.clientHeight, o.scrollHeight, o.offsetHeight)).toFixed(3) } function getIdentifierId() { let t = "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".split(""); for (let e = 0, n = t.length; e < n; e++)switch (t[e]) { case "x": t[e] = Math.floor(16 * Math.random()).toString(16); break; case "y": t[e] = (Math.floor(4 * Math.random()) + 8).toString(16) }return t.join("") } function getTMGcookie() { var t = "", e = document.cookie.split(";"); for (var n of e) { var o = n.split("="); "_TMG_hm_Tj8Rwx45" === o[0].trim() && (t = o[1]) } return t } function setTMGcookie(t) { document.cookie = "_TMG_hm_Tj8Rwx45=" + t + ";max-age=31104000" } function sendGtag() { "" === heatUserId && setTMGcookie(heatUserId = getIdentifierId()), window.gtag("event", "heat_mapping", { event_category: "heat_mapping_scroll", event_label: `ui:${heatUserId}|ct:${Date.now()}|pu:${location.href}|sp:${$("body").scrollTop() || $("html").scrollTop()}|wh:${$(window).outerHeight()}|ww:${$(window).outerWidth()}`, value: 1 }) } $("body").on("click", function (t) { "" === heatUserId && setTMGcookie(heatUserId = getIdentifierId()), window.gtag("event", "heat_mapping", { event_category: "heat_mapping_click", event_label: `ui:${heatUserId}|ct:${Date.now()}|in:${$(t.target).attr("name") || $(t.target).closest("input").attr("name") || $(t.target).closest("button").attr("name")}|pu:${location.href}|lt:${getClickText(t)}|cl:${getClickLink(t)}|rx:${getRelativeX(t)}|ry:${getRelativeY(t)}|wh:${$(window).outerHeight()}|ww:${$(window).outerWidth()}`, value: 1 }) }); let startTime = null; const update = function (t) { startTime || (startTime = t), 1e3 < t - startTime && (startTime = t, sendGtag()), window.requestAnimationFrame(update) }; update();

  //ヘッダー

  var $btnNav = $('.btn-nav');
  var $headerForm = $('.header-form-main-area');

  $btnNav.on('click', function () {

    var result = $btnNav.hasClass('opened');

    if (result) {
      $headerForm.removeClass("show");
      $btnNav.removeClass('opened');
    } else {
      $headerForm.addClass("show");
      $btnNav.addClass('opened');
    }
  });

  $headerForm.on("click", function () {
    $headerForm.removeClass("show");
    $btnNav.removeClass('opened');
  });

  $(".form-container").on("click", function (e) {
    e.stopPropagation();
  });

  /*
   * アコーディオン
   */
  var $faqProduct = $('.acd-list');
  $faqProduct.on("click", function () {
    $(this).next().slideToggle();
  });

  /*
   * SP ヘッダー アコーディオン
   */
  $("header .menu-oc").on("click", function () {
    $(this).toggleClass('opened').next(".menu-oc-list").slideToggle();
  });

  /*
   * よくある質問　開閉
   */
  $(function () {
    $(".faq-qa-area dt").on("click", function () {
      $(this).next().slideToggle();
      $(this).find('.q-icon').toggleClass("cross");
    });
  });


    // 学校紹介部分のスライドショー
    if ($("#page-top")[0]) {
    (function () {
      var $slideWrapper = $('.school-main-area .slide_show_area');
      var $slideList = $slideWrapper.find(".slide_select");
      var slideLength = $slideList.length;
      $slideWrapper.append($slideList.clone(true));
      $slideWrapper.append($slideList.clone(true));
      $slideList = $slideWrapper.find(".slide_select");

      if (pcWindow) {
        $slideList.css({
          "transform": "translate(-100%, 0)"
        });

        var currentSlide = 1;
        var intervalId = setInterval(function () {
          currentSlide++;
          if (0 == currentSlide % slideLength) {
            $slideWrapper.append($slideWrapper.find(".slide_select").slice(0, slideLength).clone(true));
            $slideList = $slideWrapper.find(".slide_select");
          }
          $slideList.css("transform", "translate(-" + currentSlide + "00%, 0)");
          if (100 < currentSlide) clearInterval(intervalId);
        }, 5000);
      }

      if (spWindow) {
        var $btnNext = $('.slide-show-wrapper .btn-next');
        var $btnPrev = $('.slide-show-wrapper .btn-prev');
        var $navList = $('.select-nav-list li');
        var currentSlide = 0;
        var slideFlag = true;

        $slideList.css({
          "transform": "translate(-" + slideLength + "00%, 0)"
        });
        setTimeout(function () {
          $slideList.css('transition', 'all .5s');
          currentSlide = slideLength;
        }, 50);

        $btnNext.on('click', function () {
          if (!slideFlag) return false;
          slideFlag = false;
          setTimeout(function () { slideFlag = true; }, 700);
          currentSlide++;
          $slideList.css("transform", "translate(-" + currentSlide + "00%, 0)");
          $navList.removeClass('displayed').eq(currentSlide % slideLength).addClass('displayed');
          if (slideLength * 2 < currentSlide + 1) {
            setTimeout(function () {
              $slideList.css('transition', 'none');
              currentSlide = slideLength;
              $slideList.css("transform", "translate(-" + currentSlide + "00%, 0)");
              setTimeout(function () {
                $slideList.css('transition', 'all .5s');
              }, 50);
            }, 600);
          }
        });

        $btnPrev.on('click', function () {
          if (!slideFlag) return false;
          slideFlag = false;
          setTimeout(function () { slideFlag = true; }, 700);
          currentSlide--;
          $slideList.css("transform", "translate(-" + currentSlide + "00%, 0)");
          $navList.removeClass('displayed').eq(currentSlide % slideLength).addClass('displayed');
          if (currentSlide < slideLength) {
            setTimeout(function () {
              $slideList.css('transition', 'none');
              currentSlide = slideLength * 2 - 1;
              $slideList.css("transform", "translate(-" + currentSlide + "00%, 0)");
              setTimeout(function () {
                $slideList.css('transition', 'all .5s');
              }, 50);
            }, 600);
          }
        });
      }
    }());

    // 価格シミュレーションの実装
    $(".select-list > li").on("click", function (e) {
      e.stopPropagation();
      $(this).find(".option-list").slideToggle(300);
    });

    $("body, html").on("click", function () {
      $(this).find(".option-list").slideUp(300);
    });

    var schoolPostId;
    var weekIndex;
    $('.option-list > li').on("click", function () {
      var listValue = $(this).data('value');
      $(this).closest('ul').prev('span').text(listValue);
      var href = $('.btn-view-simulation').attr('href').split("?")[0];
      if ($(this).data('category') == 'school') {
        schoolPostId = $(this).data('post-id');
      } else if ($(this).data('category') == 'week') {
        weekIndex = $(this).data('weekIndex');
      }
      if (schoolPostId && weekIndex) {
        var targetUrl = href + "?p=" + schoolPostId + "&weeks=" + weekIndex;
        $('.btn-view-simulation').attr('href', targetUrl);
      }
    });
  };

  /*
    * Easing Function
    */
  jQuery.extend(jQuery.easing, {
    easeOutCubic: function (x, t, b, c, d) {
      return c * ((t = t / d - 1) * t * t + 1) + b;
    },
  });

  if (pcWindow) {

    var $slideSub = $('.slide-sub');

    $slideSub.on("click", function () {
      $(this).find(".middle-slide").slideToggle();
    });
  }

  //トップ　無料相談はこちら　fixed
  if (spWindow) {

    var $freeConsultation = $('#free-consultation');

    $(window).on('load scroll', function () {
      if ($(window).scrollTop() > 180) {
        $freeConsultation.fadeIn(180);
      } else {
        $freeConsultation.fadeOut(200);
      }
    });
  }

  //トップ　電話番号表示

  if (spWindow) {

    var $iconPhone = $('.icon-phone');

    $iconPhone.on("click", function () {
      $(".phone-number-display").fadeIn();
    });

    var $closeBtn = $('.close_btn > span');

    $closeBtn.on("click", function () {

      $(".phone-number-display").fadeOut();
    });
  }

  /*
   * 学校紹介ページ
   */
  if ($("#single-school")[0]) {

    // スライドショー
    var $slideWrapper = $('.slide-main .img-slide');
    var $slideList = $slideWrapper.find('li');
    var slideLength = $slideList.length;
    $slideWrapper.append($slideList.clone(true));
    $slideWrapper.append($slideList.clone(true));
    $slideList = $slideWrapper.find('li');
    var currentIndex = slideLength;
    var $navList = $('.btn-list .nav-list li');
    var $btnPrev = $('.scroll_left');
    var $btnNext = $('.scroll_right');
    $slideList.css('transform', 'translate3d(-' + currentIndex + '00%, 0, 0)');
    setTimeout(function () {
      $slideList.css('transition', '.9s');
    }, 100);

    var intervalId = setInterval(function () {
      currentIndex++;
      $slideList.css('transform', 'translate3d(-' + currentIndex + '00%, 0, 0)');
      if (currentIndex === slideLength * 2 + 1) {
        setTimeout(function () {
          currentIndex = slideLength + 1;
          resetPosition();
        }, 1200);
      }
      switchNavList();
    }, 4000);

    $btnPrev.on("click", function () {
      clearInterval(intervalId);
      currentIndex--;
      $slideList.css('transform', 'translate3d(-' + currentIndex + '00%, 0, 0)');
      if (currentIndex === slideLength - 1) {
        setTimeout(function () {
          currentIndex = slideLength * 2 - 1;
          resetPosition();
        }, 1200);
      }
      switchNavList();
    });

    $btnNext.on("click", function () {
      clearInterval(intervalId);
      currentIndex++;
      $slideList.css('transform', 'translate3d(-' + currentIndex + '00%, 0, 0)');
      if (currentIndex === slideLength * 2) {
        setTimeout(function () {
          currentIndex = slideLength;
          resetPosition();
        }, 1200);
      }
      switchNavList();
    });

    $navList.on('click', function () {
      clearInterval(intervalId);
      var index = $navList.index($(this));
      currentIndex = slideLength + index;
      $slideList.css('transform', 'translate3d(-' + currentIndex + '00%, 0, 0)');
      switchNavList();
    });

    function resetPosition() {
      $slideList.css('transition', '.0s');
      $slideList.css('transform', 'translate3d(-' + currentIndex + '00%, 0, 0)');
      setTimeout(function () {
        $slideList.css('transition', '.9s');
      }, 100);
    }

    function switchNavList() {
      $navList.removeClass('displayed').eq(currentIndex % slideLength).addClass('displayed')
    }

    // シミュレーションボックスの画面追従切り替え
    if (pcWindow) {
      var $simulationBox = $(".column-simulation");
      var $plazaTitle = $(".title-wrapper");
      var $schoolTopArea = $(".main-content");
      var styleTopValue = 68;
      $(window).on('scroll', function () {
        var topPlazaTitle = $plazaTitle.offset().top;
        var bottomSchoolTopArea = $schoolTopArea.offset().top + $schoolTopArea.height();
        var currentPosition = $('body, html').scrollTop();
        if (bottomSchoolTopArea - $simulationBox.height() - styleTopValue < currentPosition) {
          // 下付きにしたい時の処理
          $simulationBox.removeClass("fixed");
          $simulationBox.addClass("bottom");
        } else if (topPlazaTitle < currentPosition) {
          // 画面追従にしたい時の処理
          $simulationBox.removeClass("bottom");
          $simulationBox.addClass("fixed");
        } else {
          // 何もしない時の処理
          $simulationBox.removeClass("fixed");
          $simulationBox.removeClass("bottom");
        }
      });
    }

    var valueIndex = {
      weekIndex: selectedWeekIndex,
      lessonIndex: 0,
      accommodationIndex: 0
    };

    function calculateEstimate() {
      var currentAmountYen;
      if (valueIndex.lessonIndex != undefined && valueIndex.accommodationIndex != undefined) {
        var weekStageIndex = week_stage_array[valueIndex.weekIndex];
        var weeklyLessonFee = lesson_array[valueIndex.lessonIndex][weekStageIndex];
        var weeklyAccommodationFee = accommodation_array[valueIndex.accommodationIndex][weekStageIndex];
        var variousExpensesFee = various_expenses_array.reduce(function (a, c) {
          return parseInt(a + c[weekStageIndex])
        }, 0);
        var totalFee = (weeklyLessonFee + weeklyAccommodationFee) * (valueIndex.weekIndex + 1) + variousExpensesFee;
        var amountYen = totalFee * 150; // TODO: レートをどうするか考案する
        var currentTotalFee = parseInt($(".amount_of_money_euro span").text().replace(",", ""));
        currentAmountYen = parseInt($(".amount_of_money_yen span").text().replace(",", ""));
        var splitLength = 50;
        var unitTotalFee = (totalFee - currentTotalFee) / splitLength;
        var unitAmountYen = (amountYen - currentAmountYen) / splitLength;
        var count = 0;
        var intervalId = setInterval(function () {
          count++;
          currentTotalFee = currentTotalFee + unitTotalFee;
          currentAmountYen = currentAmountYen + unitAmountYen;
          $(".amount_of_money_euro span").text(Math.floor(currentTotalFee).toLocaleString());
          $(".amount_of_money_yen span").text(Math.floor(currentAmountYen).toLocaleString());
          if (count == splitLength) {
            clearInterval(intervalId);
            $(".amount_of_money_euro span").text(totalFee.toLocaleString());
            $(".amount_of_money_yen span").text(amountYen.toLocaleString());
          }
        }, 15);
        // 問い合わせパラメータ切り替え
        var href = $('.btn-contact').attr('href');
        var baseUrl = href.split('?')[0];
        var targetUrl = baseUrl
          + "?weeks=" + valueIndex.weekIndex
          + "&lesson=" + valueIndex.lessonIndex
          + "&accommodation=" + valueIndex.accommodationIndex
          + "&schools=" + schoolId
          + "&amount_yen=" + parseInt(amountYen);
        $('.btn-contact').attr('href', targetUrl);
        $('.link-contact-sp').attr('href', targetUrl);
      } else {
        return false;
      }
    }

    // 週数がパラメータで与えられた場合
    if (selectedWeekIndex != null) {
      $('.list-week span, .selected-week').text((selectedWeekIndex + 1) + " 週間");
      calculateEstimate();
    }

    // 価格シミュレーションの実装
    $(".select-list > li").on("click", function (e) {
      e.stopPropagation();
      $(this).find(".option-list").slideToggle(300);
    });

    $("body, html").on("click", function () {
      $(this).find(".option-list").slideUp(300);
    });

    $(".option-list li").on("click", function () {
      var thisCategory = $(this).data("category");
      var thisValue = $(this).data("value");
      var thisIndex = $(this).data("index");
      $(this).closest(".option-list").prev("span").text(thisValue);
      $(".simulation-select-box .selected-" + thisCategory).text(thisValue);
      $("#" + thisCategory + "-" + thisIndex).click();
      valueIndex[thisCategory + "Index"] = thisIndex;
      calculateEstimate()
    });

    $(".select-list li input").on("change", function () {
      var $checkedInput = $(this).closest(".select-list").find("input:checked");
      var selectIndex = $(this).closest(".select-list").find("input").index($checkedInput);
      var name = $(this).attr("name");
      var value = $(this).closest(".select-list").find("input").eq(selectIndex).attr("value");
      $(".list-" + name).find("span").text(value);
      $(".simulation-select-box .selected-" + name).text(value);
      valueIndex[name + "Index"] = selectIndex;
      calculateEstimate();
    });
  }

  /*
   * お問い合わせページ
   */
  if ($("#contact")[0]) {

    // プライバシーポリシーに同意する機能
    var $protectWrap = $(".protect-wrap");
    $("#agree").on("change", function () {
      $(this).prop("checked") ? $protectWrap.hide() : $protectWrap.show();
    });

    // 郵便番号を入力すると住所を自動で取得する
    if ($('#input-postal-code')[0]) {
      var $inputPostalCode = $('#input-postal-code');
      var $inputAddress = $('#input-address');
      var prevInputVal = "";

      $inputPostalCode.on('keypress', function (e) {
        var inputKey = e.key;
        if (!inputKey.match("[0-9]")) e.preventDefault();
      });

      $inputPostalCode.on("keyup", function () {
        var inputVal = $(this).val();
        if (inputVal.length == 7) {
          if (prevInputVal == inputVal) return false;
          prevInputVal = inputVal;
          $.ajax({
            type: "GET",
            url: "https://zip-cloud.appspot.com/api/search?zipcode=" + inputVal,
            dataType: "jsonp",
            success: function (data) {
              if (data.results) {
                var results = data.results[0];
                var address = results["address1"] + results["address2"] + results["address3"];
                $inputAddress.val(address);
              } else {
                $inputAddress.val("該当の郵便番号が存在しません");
              }
            }
          });
        }
      });
    }

    // 留学期間、留学開始日を入力すると終了日を自動設定する
    if ($('#input-term-begin')[0] && $('#select-study-weeks')[0] && $('#input-term-end')[0]) {
      var $inputTermBegin = $('#input-term-begin');
      var $inputTermEnd = $('#input-term-end');
      var $selectStudyWeeks = $('#select-study-weeks');

      $inputTermBegin.on('keypress change', function () {
        if ($(this).val()) {
          var valueStudyWeeks = $selectStudyWeeks.val();
          var date = new Date($(this).val());
          date.setDate(date.getDate() + valueStudyWeeks * 7);
          var year = date.getFullYear();
          var month = ("0" + (date.getMonth() + 1)).slice(-2);
          var day = ("0" + date.getDate()).slice(-2);
          $inputTermEnd.val(year + "-" + month + "-" + day);
        }
      });

      $selectStudyWeeks.on('keypress change', function () {
        if ($inputTermBegin.val()) {
          var valueStudyWeeks = $(this).val();
          var date = new Date($inputTermBegin.val());
          date.setDate(date.getDate() + valueStudyWeeks * 7);
          var year = date.getFullYear();
          var month = ("0" + (date.getMonth() + 1)).slice(-2);
          var day = ("0" + date.getDate()).slice(-2);
          $inputTermEnd.val(year + "-" + month + "-" + day);
        }
      });
    }

    // 学校名を選択すると所属するレッスン内容と宿泊タイプを取得する
    var $selectSchoolName = $('#select-school-name');
    var $selectLesson = $('#select-lesson');
    var $selectAccommodation = $('#select-accommodation');

    function getLessonsAndAccommodations(schoolId) {
      $.ajax({
        type: "POST",
        url: ajaxUrl,
        data: {
          'action': 'get_lessons_and_accommodations',
          'school_id': schoolId
        },
        dataType: "json",
        success: function (data) {
          $selectLesson.find('option').remove();
          data['lesson'].forEach(function (value) {
            $selectLesson.append('<option value="' + value + '">' + value + '</option>');
          });
          $selectAccommodation.find('option').remove();
          data['accommodation'].forEach(function (value) {
            $selectAccommodation.append('<option value="' + value + '">' + value + '</option>');
          });
        },
      })
    }

    if ($selectSchoolName && $selectLesson && $selectAccommodation) {
      $selectSchoolName.on('change', function () {
        var schoolId = $(this).val();
        getLessonsAndAccommodations(schoolId);
      });
    }
  }


  if ($("#price")[0]) {
    $(".select-list > li").on("click", function (e) {
      e.stopPropagation();
      $(this).find(".option-list").slideToggle(300);
    });

    $("body, html").on("click", function () {
      $(this).find(".option-list").slideUp(300);
    });

    var schoolPostId;
    var weekIndex;
    $('.option-list > li').on("click", function () {
      var listValue = $(this).data('value');
      $(this).closest('ul').prev('span').text(listValue);
      var href = $('.btn-view-simulation').attr('href').split("?")[0];
      if ($(this).data('category') == 'school') {
        schoolPostId = $(this).data('post-id');
      } else if ($(this).data('category') == 'week') {
        weekIndex = $(this).data('weekIndex');
      }
      if (schoolPostId && weekIndex) {
        var targetUrl = href + "?p=" + schoolPostId + "&weeks=" + weekIndex;
        $('.btn-view-simulation').attr('href', targetUrl);
      }
    });
  };

  if ($(".index-area")[0]) {
    // 目次スムーススクロール
    $('a[href*="#"]').on("click", function () {
      var href = "#" + $(this).attr("href").split("#")[1];
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top - 32;
      if (spWindow) position = target.offset().top - $(".header-wrapper").height();
      $('body,html').animate({ scrollTop: position }, 400, 'easeOutCubic');
      return false;
    });
  }

}(jQuery));

