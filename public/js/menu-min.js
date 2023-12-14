!function(e){"use strict";function t(){jQuery(document).on("click",".checkboxUtility",(function(){jQuery(this).parents(".default-tab").find('input[type="checkbox"]').prop("checked",!1)}))}function n(){jQuery(document).on("keyup",".itemLabel",(function(){var e=jQuery(this).val(),t=jQuery(this).attr("rel");jQuery(".showLabel_"+t).text(e)}))}function t(){jQuery(".checkboxUtility").on("click",(function(){jQuery(".AllUncheck span").removeClass("checked"),jQuery(".CheckboxViewAll").prop("checked",!1)}))}function r(){jQuery(document).on("click",".CancelItem",(function(){var e=jQuery(this).parents(".accordion__item");e.find(".accordion-header").addClass("collapsed"),e.find(".accordion__body").removeClass("show")}))}jQuery(".CancelCreateMenu").addClass("d-none"),jQuery("#MenuCreateMessageContainer").hide("slow"),jQuery("#CreateMenu").on("click",(function(){jQuery("#MenuSelect option").prop("selected",!1),jQuery("#MenuTitle").val(""),jQuery("#NewMenuId").val(""),jQuery("#MenuItemContainer").empty(),jQuery("#MenuAdminIndexForm").attr("action",create_menu_url),jQuery("#MenuItemContainerDisable").addClass("disable_menu"),jQuery("#MenuAttributeContainerDisable").addClass("disable_menu"),jQuery("#MenuCreateMessageContainer").show(),jQuery("#CreateMenu").hide("slow"),jQuery(".CancelCreateMenu").removeClass("d-none")})),jQuery(".SelectAllItems").on("click",(function(){jQuery(this).parents(".ItemsCheckboxSec").find('input[type="checkbox"]').prop("checked",!0)})),jQuery(".DeSelectAllItems").on("click",(function(){jQuery(this).parents(".ItemsCheckboxSec").find('input[type="checkbox"]').prop("checked",!1)})),t(),jQuery(document).on("click",".AddToMenu",(function(){var t=jQuery(".dd ol").length,n=jQuery(this),r=n.attr("menu-type"),u=n.attr("menu-id"),a=1;if(u=parseInt(u,10),jQuery(".CheckboxViewAll").each((function(){if(1==jQuery(this).prop("checked"))return a=0,!1;a=1})),1==a&&(a="Please select one item."),(u<1||""==u)&&(a="Please Select Menu."),0==a){var o=jQuery(this).closest("form").serialize()+"&menu_type="+r,i=jQuery(this).closest("form").attr("action");jQuery.ajax({headers:{"X-CSRF-TOKEN":e('meta[name="csrf-token"]').attr("content")},url:i,data:o,type:"POST",success:function(e){if(0==e.status)return alert(e.msg),!1;0==t&&jQuery(".menuss").append(e),jQuery("#MenuItemContainer").css("background-color","#FFFF99"),setTimeout((function(){jQuery(".setMenu").first().append(e),jQuery("#MenuItemContainer").removeAttr("style")}),500)}})}else alert(a)})),jQuery(document).on("click",".PagesAddToMenu",(function(){var t=jQuery(".dd ol").length,n=jQuery(".PageMenu").val();n=parseInt(n,10);var r=1;if(jQuery(".CheckboxViewAll").each((function(){if(1==jQuery(this).prop("checked"))return r=0,!1;r=1})),1==r&&(r="Please select page."),(n<1||""==n)&&(r="Please Select Menu."),0==r){var u=jQuery(this).closest("form").serialize(),a=jQuery(this).closest("form").attr("action");jQuery.ajax({headers:{"X-CSRF-TOKEN":e('meta[name="csrf-token"]').attr("content")},url:a,data:u,type:"POST",success:function(e){0==t&&jQuery(".menuss").append(e),jQuery("#MenuItemContainer").css("background-color","#FFFF99"),setTimeout((function(){jQuery(".setMenu").first().append(e),jQuery("#MenuItemContainer").removeAttr("style")}),500)}})}else alert(r)})),jQuery(document).on("click",".LinksAddToMenu",(function(){var e=jQuery(".dd ol").length,t=jQuery(".LinkMenu").val(),u=jQuery(".MenuLinkUrl").val(),a=jQuery(".MenuLinkTitle").val(),o="";if((""==jQuery.trim(u)&&""==jQuery.trim(a)||""==jQuery.trim(t))&&(o="Please fill these fields."),""==o){var i=jQuery(this).closest("form").serialize(),s=jQuery(this).closest("form").attr("action");jQuery.ajax({url:s,data:i,type:"POST",success:function(t){0==e&&jQuery(".menuss").append(t),jQuery("#MenuItemContainer").css("background-color","yellow"),setTimeout((function(){jQuery(".setMenu").first().append(t),jQuery("#MenuItemContainer").removeAttr("style"),n(),r()}),500)}})}else alert(o)})),n(),jQuery(document).on("click",".RemoveItem",(function(){var t=jQuery(this).attr("rel"),n=jQuery(this).attr("item-name");if(!confirm("Are you sure you want to delete item "+n+"?"))return!1;if(""!=t&&"undefined"!=typeof ajax_menu_item_delete){var r=ajax_menu_item_delete;jQuery.ajax({headers:{"X-CSRF-TOKEN":e('meta[name="csrf-token"]').attr("content")},url:r,type:"POST",data:{item_id:t},success:function(e){if(0==e.status)return alert(e.msg),!1;var n=jQuery(".xLi_"+t+" ol").children().first();jQuery(".xLi_"+t+" .dd3-content").css("background-color","red"),jQuery(".xLi_"+t).before(n),jQuery(".xLi_"+t).fadeOut("slow",(function(){jQuery(this).remove()}))}})}})),r(),jQuery(document).on("click",".DeleteMenu",(function(){var t=jQuery(this).attr("rel"),n=jQuery(this).attr("menu-name");if(""!=t&&confirm("Are you sure you want to delete menu "+n+"?")){var r=admin_menu_destroy;jQuery.ajax({headers:{"X-CSRF-TOKEN":e('meta[name="csrf-token"]').attr("content")},url:r,type:"POST",data:{menu_id:t},success:function(e){if(0==e.status)return alert(e.msg),!1;window.location.replace(admin_menu_index)}})}})),jQuery(document).on("keyup",".SearchForMenu",(function(){var t=jQuery(this).val(),n=jQuery(this).parent().children(".search_type").val(),r=jQuery(this).closest(".tab-pane").children(".searchContentDiv");""!=jQuery.trim(t)&&""!=jQuery.trim(n)&&"undefined"!=typeof search_menus_url?jQuery.ajax({headers:{"X-CSRF-TOKEN":e('meta[name="csrf-token"]').attr("content")},type:"POST",url:search_menus_url,data:{page_key:t,search_type:n},success:function(e){r.html(e)}}):r.html("")})),t(),jQuery(document).on("click",".allowField",(function(){var e=jQuery(this).attr("rel");if(1==jQuery(this).prop("checked")){var t=1;jQuery(".X"+e).slideDown("slow",(function(){jQuery(this).removeClass("d-none")}))}else t=0,jQuery(".X"+e).slideUp("slow",(function(){jQuery(this).addClass("d-none")}));var n=new Date;n.setDate(n.getDate()+30),document.cookie="isCheck_"+e+"="+t+"; expires="+n.toGMTString()+"path=/"})),function(){if("undefined"==typeof screenOptionArray)return!1;var e=JSON.parse(screenOptionArray);jQuery.each(e,(function(e,t){jQuery.each(t,(function(t,n){var r=function(e){for(var t=e+"=",n=decodeURIComponent(document.cookie).split(";"),r=0;r<n.length;r++){for(var u=n[r];" "==u.charAt(0);)u=u.substring(1);if(0==u.indexOf(t))return u.substring(t.length,u.length)}return""}("isCheck_"+e);1==(r=parseInt(r,10))?(jQuery(".X"+e).removeClass("d-none"),jQuery(".Allow"+e).prop("checked",!0)):0==r&&(jQuery(".X"+e).addClass("d-none"),jQuery(".Allow"+e).prop("checked",!1))}))}))}(),e(document).ready((function(){var t=function(t){var n=t.length?t:e(t.target),r=n.data("output");null!=r&&(window.JSON?r.val(window.JSON.stringify(n.nestable("serialize"))):r.val("JSON browser support required for this demo."))};e("#NestableMenu").nestable({group:1}).on("change",t),t(e("#NestableMenu").data("output",e("#nestable-output")))}))}(jQuery);