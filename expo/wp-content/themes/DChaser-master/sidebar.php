        <!-- Sidebar -->
        <div id="sidebar">
			<div id="entryexpo" class="widget well">
				<h3 class="right_title">我要参展</h3>
				<ul>
					<li><a href="">>>参展须知</li>
					<li><a href="">>>展厅分布图</li>
					<li><a href="">>>参展登记</li>
				</ul>
			</div>
			<div id="audienceexpo" class="widget well">
				<h3 class="right_title">我要参观</h3>
				<ul>
					<li><a href="">>>参观须知</li>
					<li><a href="">>>展厅分布图</li>
					<li><a href="">>>参观登记</li>
				</ul>
			</div>
            <?php
            if(!dynamic_sidebar('gkwp-right')){
                _e('左侧展示没有内容','gkwp');
            }
            ?>
			
        </div>
        <!-- /Sidebar -->