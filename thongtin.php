<?php # Script 3.4 - index.php
$page_title = 'Welcome to this Site!';
include('includes/header.html');
?>
<div class="body">
    <div id="fontSizeWrapper">
        <label for="fontSize">Font size</label>
        <input type="range" value="1" id="fontSize" step="0.5" min="0.5" max="5" />
    </div>
    <ul class="tree">
        <li>
            <input type="checkbox" checked="checked" id="c1" /> <!--  checked="checked" -->
            <label class="tree_label" for="c1">Nguyễn Việt Hưng</label>
            <ul>
                <li>
                    <input type="checkbox" id="c2" />
                    <!-- <label for="c2" class="tree_label">MSSV: 61133712</label> -->
                    <span class="tree_label">MSSV: 61133712</span>
                    <!-- <ul>
                        <li><span class="tree_label">Level 2</span></li>
                    </ul> -->
                </li>
                <li>
                    <input type="checkbox" id="c3" />
                    <!-- <label for="c3" class="tree_label">Lớp: 61.CNTT-1</label> -->
                    <span class="tree_label">Lớp: 61.CNTT-1</span>
                </li>
                <li>
                    <input type="checkbox" id="c4" />
                    <!-- <label for="c4" class="tree_label">Ảnh: </label> -->
                    <span class="tree_label">Ảnh:</span>
                </li>
                <li>
                    <input type="checkbox" checked="checked" id="c5" />
                    <label for="c5" class="tree_label">Công việc được giao</label>
                    <ul>
                        <li><span class="tree_label">Level 2</span></li>
                    </ul>
                </li>
            </ul>
        </li>


        <li>
        <input type="checkbox" checked="checked" id="c6" /> <!--  checked="checked" -->
            <label class="tree_label" for="c6">Trương Minh Phi</label>
            <ul>
                <li>
                    <input type="checkbox" id="c7" />
                    <!-- <label for="c2" class="tree_label">MSSV: 61133712</label> -->
                    <span class="tree_label">MSSV: 61130848</span>
                    <!-- <ul>
                        <li><span class="tree_label">Level 2</span></li>
                    </ul> -->
                </li>
                <li>
                    <input type="checkbox" id="c8" />
                    <!-- <label for="c3" class="tree_label">Lớp: 61.CNTT-1</label> -->
                    <span class="tree_label">Lớp: 61.CNTT-1</span>
                </li>
                <li>
                    <input type="checkbox" id="c9" />
                    <!-- <label for="c4" class="tree_label">Ảnh: </label> -->
                    <span class="tree_label">Ảnh:</span>
                </li>
                <li>
                    <input type="checkbox" checked="checked" id="c10" />
                    <label for="c10" class="tree_label">Công việc được giao</label>
                    <ul>
                        <li><span class="tree_label">Level 2</span></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>

<?php
include('includes/footer.html');
?>