FROM centos
RUN yum install python3 -y
RUN yum update -y
RUN yum install gcc gcc-c++ python3-devel -y
RUN pip3 install --upgrade virtualenv
#RUN source /venvs/tensorflow/bin/activate
RUN pip3 install --upgrade pip
RUN pip install tensorflow
RUN pip install --upgrade tensorflow
RUN pip3 install keras
RUN pip3 install pillow
RUN pip3 install opencv-python
RUN mkdir project
CMD ["/bin/bash"]
WORKDIR /project
VOLUME ["/project"]


