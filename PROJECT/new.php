create table teaches(
    cid int,
    fid int,
    foreign key (cid) REFERENCES course(cid),
    foreign key (fid) REFERENCES faculty(fid)
);