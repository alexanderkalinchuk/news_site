$(newsListMigration);

function newsListMigration() {

	var catItemOfList = $('[class $= -item-of-list]') ; // массив с новостями на главной странице
	var category = $('.news-list > div') ; // массив с категориями новостей

	for (k=0; k<category.length; k++) {

		for(i=0; i<catItemOfList.length; i++){

			//если класс новости соответвует классу категории+'-item-of-list', значит кидаем эту новость в блок этой категории
			if ( catItemOfList[i].className === category[k].className + '-item-of-list' ){  

				var cl = '.'+ category[k].className +'-news-content';
				$(cl+' >ul').append(catItemOfList[i]); // перемещаем элемент внутри DOM
					
			}
		}
	}

}

// function onlyFiveNews() {
// 	var catItemOfList = $('[class $= -item-of-list]');

// 	for (i=catItemOfList.length; i>catItemOfList.length-5; i--){
// 		$('.removeMe').remove();

// 	}
// }
