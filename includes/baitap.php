<?php # Script 3.4 - index.php
$page_title = 'Welcome to this Site!';
include('../includes/header.html');
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
                    <input type="checkbox" checked="checked" id="c2" />
                    <!--checked="checked"  --> 
                    <label for="c2" class="tree_label">Form</label>
                    <ul>
                        <li><a href="BT_NVH/test.php"><span class="tree_label">test</span></a></li>
                        <li><span class="tree_label">Level 2</span></li>
                    </ul>
                </li>
                <li>
                    <input type="checkbox" checked="checked" id="c3" />
                    <label for="c3" class="tree_label">OOP</label>
                    <ul>
                        <li><span class="tree_label">Level 2</span></li>
                        <li>
                            <input type="checkbox" checked="checked" id="c4" />
                            <label for="c4" class="tree_label"><span class="tree_custom">Specified tree item view</span></label>
                            <ul>
                                <li><span class="tree_label">Level 3</span></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <input type="checkbox" checked="checked" id="c4" />
                    <label for="c4" class="tree_label">Array & String</label>
                    <ul>
                        <li><span class="tree_label">Level 2</span></li>
                        <li>
                            <input type="checkbox" checked="checked" id="c4" />
                            <label for="c4" class="tree_label"><span class="tree_custom">Specified tree item view</span></label>
                            <ul>
                                <li><span class="tree_label">Level 3</span></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <input type="checkbox" checked="checked" id="c5" />
                    <label for="c5" class="tree_label">Database</label>
                    <ul>
                        <li><span class="tree_label">Level 2</span></li>
                        <li>
                            <input type="checkbox" checked="checked" id="c6" />
                            <label for="c6" class="tree_label"><span class="tree_custom">Specified tree item view</span></label>
                            <ul>
                                <li><span class="tree_label">Level 3</span></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>


        <li>
        <input type="checkbox" checked="checked" id="c7" /> <!--  checked="checked" -->
            <label class="tree_label" for="c7">Trương Minh Phi</label>
            <ul>
                <li>
                    <input type="checkbox" checked="checked" id="c8" />
                    <!--checked="checked"  -->
                    <label for="c8" class="tree_label">Form</label>
                    <ul>
                        <li><span class="tree_label">Level 2</span></li>
                        <li><span class="tree_label">Level 2</span></li>
                    </ul>
                </li>
                <li>
                    <input type="checkbox" checked="checked" id="c9" />
                    <label for="c9" class="tree_label">OOP</label>
                    <ul>
                        <li><span class="tree_label">Level 2</span></li>
                        <li>
                            <input type="checkbox" id="c10" />
                            <label for="c10" class="tree_label"><span class="tree_custom">Specified tree item view</span></label>
                            <ul>
                                <li><span class="tree_label">Level 3</span></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <input type="checkbox" checked="checked" id="c11" />
                    <label for="c11" class="tree_label">Array & String</label>
                    <ul>
                        <li><span class="tree_label">Level 2</span></li>
                        <li>
                            <input type="checkbox" checked="checked" id="c12" />
                            <label for="c12" class="tree_label"><span class="tree_custom">Specified tree item view</span></label>
                            <ul>
                                <li><span class="tree_label">Level 3</span></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <input type="checkbox" checked="checked" id="c13" />
                    <label for="c13" class="tree_label">Database</label>
                    <ul>
                        <li><span class="tree_label">Level 2</span></li>
                        <li>
                            <input type="checkbox" checked="checked" id="c14" />
                            <label for="c14" class="tree_label"><span class="tree_custom">Specified tree item view</span></label>
                            <ul>
                                <li><span class="tree_label">Level 3</span></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>

<?php
include('../includes/footer.html');
?>