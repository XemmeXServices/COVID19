                            <div class="row ">
                                <div class=" col-lg-12">
                                    <div class="page-title footerchange">Copyright © 2020 Corona Virus Tracker</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<?php $this->load->view("template/js_vw");?>

<script>
    $(document).ready(function () {
        $('table').DataTable({
            order: [],
            paging: true,
            "pageLength": 10,
            "pagingType": "full_numbers",
            "dom": '<"top"flp>rt<"bottom"ip><"clear">',
        });
    });
</script>